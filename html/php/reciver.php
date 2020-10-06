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
foreach ($Criteria_hidden as $CriteriaObject) {
  foreach ($CriteriaObject as $Criteria_title => $Crit) {
    $RF = new Recommendation_Feature();
    $RF->setTitle($Criteria_title);
    $RF->setPriority($Crit[$Criteria_title . '_priority']);
    $RF->setWeight($Crit[$Criteria_title . '_rate']);
    //$Criteria->Recommendation_Features[]=$RF;
    $Criteria->Add_Recommendation_Feature($RF);

    //  }
  }
}



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$cloud = new Cloud();


foreach ($cloud_json as $fogs) {
  foreach ($fogs as $fogs_title => $things) {
    $fog = new Fog();
    foreach ($things as $things_obj) {
      $thing = new Thing();
      $thing->setRate_send($things_obj['thing']["rate"]);
      $thing->setDistance($things_obj['thing']["distance"]);
      $thing->setData_size($things_obj['thing']["data"]);
      $thing->setAim($things_obj['thing']["check"]);
      $fog->Add_Thing($thing);
    }
    $cloud->Add_Fog($fog);
  }
}



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


foreach ($cloud->getFogs() as $obj) {
  print_r($obj->getThings());
  echo "<br>";

  foreach ($obj->getThings() as $dd) {
    print_r($dd);
    echo "<br>";
  }
}


echo "<br>";
echo "<br>";
echo "<br>";
print_r($Criteria);  //."<br>";

//////////////////////////////////////

//  $processing_placement=new Processing_placements($cloud,$Criteria);

$storage_placements = new storage_placements($cloud, $Criteria);
