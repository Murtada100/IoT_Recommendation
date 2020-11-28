<?php
session_start();
require_once('criteria.php');
require_once('model/recommendationFeatures.php');
require_once('model/cloud.php');
require_once('model/fog.php');
require_once('model/thing.php');

require_once('Processingplacements.php');
require_once('StoragePlacements.php');

/*
*The current implementation extract the cloud configuration and criteria into json format and set it into sessions then the 
* system will rediect you to reciver.php where the json is convert into OOP sturcutre
* Next Step: Recommendar
**
***
*/

$Criteria = new criteria();
$cloud_json = $_SESSION["cloud_hidden"];
$Criteria_hidden = $_SESSION["Criteria_hidden"];
print_r($cloud_json);
//  print_r($Criteria_hidden);

// foreach ($Criteria_hidden as $CriteriaObject) {
//   foreach ($CriteriaObject as $Criteria_title => $Crit) {
//     $RF = new Recommendation_Feature();
//     $RF->setTitle($Criteria_title);
//     $RF->setPriority($Crit[$Criteria_title . '_priority']);
//     $RF->setWeight($Crit[$Criteria_title . '_rate']);
//     //$Criteria->Recommendation_Features[]=$RF;
//     $Criteria->Add_Recommendation_Feature($RF);

//     //  }
//   }
// }



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$things = array();
$fogs = array();
$clouds = array();
 

foreach ($cloud_json[2]['things'] as $objthing) {
    $json_thing=$objthing['thing'];
    $thing = new Thing();
    $thing->setThing_domain($json_thing["thing_domain"]);
    $thing->setThing_id($json_thing["thingnumber"]);
    $thing->setFrequency($json_thing["Frequency"]);
    $thing->setSensitivity($json_thing["Sensitivity"]);
    $thing->setFreshness($json_thing["Freshness"]);
    $thing->setTime($json_thing["Time"]);
    $thing->setVolume($json_thing["Volume"]);
    $thing->setCriticality($json_thing["Criticality"]);
    $things[] = $thing; 
}


foreach ($cloud_json[1]['fogs'] as $objfog) {
  $json_fog = $objfog['fog'];
  $fog = new Fog();
  $fog->setFog_domain($json_fog["fog_domain"]);
  $fog->setFog_id($json_fog["fognumber"]);
  $fogs[] = $fog;
}


foreach ($cloud_json[0]['clouds'] as $objcloud) {
  $json_cloud = $objcloud['cloud'];
  $cloud = new Cloud();
  $cloud->setCloud_domain($json_cloud["cloud_domain"]);
  $cloud->setCloud_id($json_cloud["cloudnumber"]);
  $clouds[] = $cloud;
}
// $cloud = new Cloud();
 echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// foreach ($fogs as $objfog) {
//   echo $objfog->getFog_domain() . "   -fog-    " . $objfog->getFog_id() . "<br>";
// }

// echo "<br>";
// echo "<br>";
// foreach ($clouds as $objcloud) {
//   echo $objcloud->getCloud_domain() . "   -thing-    " . $objcloud->getCloud_id() . "<br>";
// }

 


echo "<br>";
echo "<br>";
echo "<br>";
//  print_r($things);  //."<br>";
$Flow_recommendation = array("T ==>C", "T ==>F", "T==>c & T==>f", "T=>f & T=F=>C");
$out_resutls = array(
  "outputArg = 0.1399 1.3530 -0.5244 0.0960",
  "outputArg = 1.1277 0.8710 -0.6804 -0.2972",
  "outputArg = 1.0751 -0.1578 0.3221 0.4247",
  "outputArg = 0.5666 1.1040 -1.1227 1.1793",
  "outputArg = 1.2207 -0.3248 0.0686 0.0781"
);
$Classes_counter = 4;
$Padging_counter = 2;
for ($j = 0; $j < count($things); $j++) {
  $thing=$things[$j]; 
$out=shell_exec('test_function '.$thing->getCri()); //Mohammed comment this line (not insert upto 5 things)
  $out=str_replace("\n","",$out); //Mohammed comment this line
  // $out = $out_resutls[$j]; //Mohammed uncomment this line
  $pattern = '/\s+/';
  $out = preg_replace($pattern, ' ', $out);
  echo  $out . "<br>";
  $predicated = explode(" ", $out);
  $predicated_num = array();
  for ($i = 0; $i < $Classes_counter; $i++) {
    $predicated_num[$i] = (float)$predicated[$i + $Padging_counter];
  }

  
  for ($i = 0; $i < count($predicated_num); $i++) {

    if ($predicated_num[$i] == max($predicated_num)) {
      print_r($Flow_recommendation[$i] ."<br>");
      print_r($thing . "<br>");
      DataFlow($thing,$fogs,$clouds,$i);
    }
  }
  echo "<br>";
  echo "<br>";
  echo "<br>";

}

 

function DataFlow($thing,$fogs,$clouds,$predicated_class){
if ($predicated_class==0)
{
  $temp_cloud=GetPlacementCloud($clouds,$thing->getThing_domain());
  echo "This Flow set to Cloud ".$temp_cloud. "<br>";
  $temp_cloud->Add_Thing($thing);
}
else if ($predicated_class==1)
{
  $temp_fog=GetPlacementFog($fogs,$thing->getThing_domain());
  echo "This Flow set to Fog ".$temp_fog. "<br>";
  $temp_fog->Add_Thing($thing);
}
else if ($predicated_class==2)
{
  $temp_cloud=GetPlacementCloud($clouds,$thing->getThing_domain());
  $temp_fog=GetPlacementFog($fogs,$thing->getThing_domain());
  echo "This Flow set to Fog ".$temp_fog. " OR to Cloud ".$temp_cloud. "<br>";
  $temp_cloud->Add_Thing($thing);
  $temp_fog->Add_Thing($thing);
}
else if ($predicated_class==3)
{
  $temp_fog=GetPlacementFog($fogs,$thing->getThing_domain());
  $temp_cloud=GetPlacementCloud($clouds,$temp_fog->getFog_domain());
  // here T=F=>C is working int the way that find the nearst fog to thing then nearest cloud to thing
  echo "This Flow set to Fog ".$temp_fog. " OR to  ".$temp_fog." Then to Cloud ".$temp_cloud."<br>";
  $temp_cloud->Add_Thing($thing);
  $temp_fog->Add_Thing($thing);

}
}

function GetPlacementFog($fogs, $domain)
{
  $fog = null;
  for ($i = 1; $i < count($fogs); $i++) {
    if ($fogs[$i]->getFog_domain() == $domain){ 
        $fog = $fogs[$i];
        break;
    }
  }

if ($fog == null) {// here check the nearest fog but it check other fog with ignoring domain
  $fog=$fogs[0];
  for ($i = 1; $i < count($fogs); $i++) {
    if (count($fogs[$i]->getThings()) == 0)
      return $fogs[$i];
    else if (count($fog->getThings()) > count($fogs[$i]->getThings())) {
      $fog = $fogs[$i];
    }
  }
  return $fog;
} else {
  if (count($fog->getThings()) == 0)
    return $fog;

  for ($i = 1; $i < count($fogs); $i++) {
    if (count($fogs[$i]->getThings()) == 0 && $fogs[$i]->getFog_domain() == $domain )
      return $fogs[$i];
    else if (count($fog->getThings()) > count($fogs[$i]->getThings())&& $fogs[$i]->getFog_domain() == $domain ) {
      $fog = $fogs[$i];
    }
  }
  return $fog;
}
}


function GetPlacementCloud($clouds, $domain)
{
  $cloud = null;
  for ($i = 1; $i < count($clouds); $i++) {
    if ($clouds[$i]->getCloud_domain() == $domain) {
      $cloud = $clouds[$i];
      break;
    }
  }
  if ($cloud == null) { // in case there is no cloud in the domain we look for all clouds with ignoring the domain
    $cloud=$clouds[0];
    for ($i = 1; $i < count($clouds); $i++) {
      if (count($clouds[$i]->getThings()) == 0)
        return $clouds[$i];
      else   if (count($cloud->getThings()) > count($clouds[$i]->getThings())) {
        $cloud = $clouds[$i];
      }
    }
    return $cloud;
  } else {
    if (count($cloud->getThings()) == 0 && count($cloud->getFogs()) == 0)
      return $cloud;

    for ($i = 1; $i < count($clouds); $i++) {
      if (count($clouds[$i]->getThings()) == 0 && $clouds[$i]->getCloud_domain() == $domain)
        return $clouds[$i];
      else   if (count($cloud->getThings()) > count($clouds[$i]->getThings()) && $clouds[$i]->getCloud_domain() == $domain) {
        $cloud = $clouds[$i];
      }
    }
    return $cloud;
  }
}

function PlaceThing2Fog($thing, $fog)
{
  $fog->Add_Thing($thing);
}

function PlaceThing2cloud($thing, $cloud)
{
  $cloud->Add_Thing($thing);
}

 