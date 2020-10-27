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
//$Criteria_hidden = $_SESSION["Criteria_hidden"];
print_r($cloud_json);

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
$things=array();
//[thingnumber] => 3 [thing_domain] => 1 [Frequency] => 1 [Sensitivity] => 89 [Freshness] => 4 [Time] => 50 [Volume] => 50 [Criticality] => 50
// print_r($cloud_json[2]['things'][2]['thing']['Frequency']);

foreach ($cloud_json[2]['things'] as $objthing) {
    $json_thing=$objthing['thing'];
    $thing = new Thing();
    $thing->setThing_domain($json_thing["thing_domain"]);
    $thing->setFrequency($json_thing["Frequency"]);
    $thing->setSensitivity($json_thing["Sensitivity"]);
    $thing->setFreshness($json_thing["Freshness"]);
    $thing->setTime($json_thing["Time"]);
    $thing->setVolume($json_thing["Volume"]);
    $thing->setCriticality($json_thing["Criticality"]);
    $things[] = $thing; 
}

// $cloud = new Cloud();


// foreach ($cloud_json as $fogs) {
//   foreach ($fogs as $fogs_title => $things) {
//     $fog = new Fog();
//     foreach ($things as $things_obj) {
//       $thing = new Thing();
//       $thing->setRate_send($things_obj['thing']["rate"]);
//       $thing->setDistance($things_obj['thing']["distance"]);
//       $thing->setData_size($things_obj['thing']["data"]);
//       $thing->setAim($things_obj['thing']["check"]);
//       $fog->Add_Thing($thing);
//     }
//     $cloud->Add_Fog($fog);
//   }
// }



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// foreach ($cloud->getFogs() as $obj) {
//   print_r($obj->getThings());
//   echo "<br>";

//   foreach ($obj->getThings() as $dd) {
//     print_r($dd);
//     echo "<br>";
//   }
// }


echo "<br>";
echo "<br>";
echo "<br>";
//  print_r($things);  //."<br>";
  $Flow_recommendation = array("T ==>C" ,"T ==>F" 	,"T==>c & T==>f"	,"T=>f & T=F=>C");

// //////////////////////////////////////
$Classes_counter=4;
$Padging_counter=2;
foreach ($things as $thing) {

  // print_r($thing->getCri());
$out=shell_exec('test_function '.$thing->getCri());
    //    $out="outputArg =    0.3903    0.0452    0.3451    0.2028";
  $out=str_replace("\n","",$out);
  $pattern = '/\s+/';
  $out= preg_replace($pattern, ' ', $out);
  echo  $out."<br>";
  $predicated=explode(" ",$out);
  $predicated_num=array();
  // unset($predicated[0]);
  // unset($predicated[1]);

  // $integerIDs = array_map('float', $predicated);

  // print_r( "  predicated= ".count($predicated)."<br>"); 
  for ($i=0; $i <$Classes_counter ; $i++) { 
    $predicated_num[$i]=(float)$predicated[$i+$Padging_counter];
    // echo  $predicated[$i]."   ".$i."<br>" ; 

  }
  // echo   "---<br>";
  // for ($i=0; $i <$Classes_counter ; $i++) { 
  
  //   echo  $predicated_num[$i]." ** ";

  // }
    echo "<br>";
    echo "<br>";
    echo "<br>";
  // print_r( "  predicated_num= ".count($predicated_num)."<br>"); 
  // print_r( "  predicated_numarray= ".$predicated_num."<br>"); 

  for ($i=0; $i < count($predicated_num); $i++) { 

    if($predicated_num[$i]==max($predicated_num))
    {
      print_r($Flow_recommendation[$i]."   ".$i."<br>"); 
     print_r( $thing."<br>"); 
    }
    // print_r($predicated_num[$i]."   ".$i."<br>"); 
  }
}
// //  $processing_placement=new Processing_placements($cloud,$Criteria);

// $storage_placements = new storage_placements($cloud, $Criteria);
