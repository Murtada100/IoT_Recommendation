<?php
     session_start();
     require_once('criteria.php');
     require_once('model/recommendationFeatures.php');
     require_once('model/cloud.php');
     require_once('model/fog.php');
     require_once('model/thing.php');
/*
*The current implementation extract the cloud configuration and criteria into json format and set it into sessions then the 
* system will rediect you to reciver.php where the json is convert into OOP sturcutre
* Next Step: Recommendar
**
***
*/
 
   $Criteria=new criteria();
   $cloud_json=$_SESSION["cloud_hidden"];
   $Criteria_hidden=$_SESSION["Criteria_hidden"] ;
// print_r( $Criteria_hidden[0]["Frequency"] );
   foreach($Criteria_hidden as $CriteriaObject) { 
       foreach($CriteriaObject as $Criteria_title => $Crit) {
        //   foreach($Crit as $Criteria_var => $value) {
          // echo   $Criteria_title . " => " .  $Crit['Frequency_rate']. "<br>";
               $RF=new Recommendation_Feature();
               $RF->setTitle($Criteria_title);
               $RF->setPriority($Crit[$Criteria_title.'_priority']);
               $RF->setWeight($Crit[$Criteria_title.'_rate']);
               //$Criteria->Recommendation_Features[]=$RF;
               $Criteria->Add_Recommendation_Feature($RF);
            
         //  }
     }
   }
 



   $cloud=new Cloud();
   

   foreach($cloud_json as $fogs) { 
  

      foreach($fogs as $fogs_title => $things) {
  //  print_r( $things  );
  $fog=new Fog();
    foreach($things as $title => $things_obj)
        {
            foreach($things_obj as $thing_title => $value)
            {
                $thing=new Thing();
                $thing->setRate_send($value["rate"]);
                $thing->setDistance($value["distance"]);
                $thing->setData_size($value["data"]);
                $fog->Add_Thing($thing);
      }
      $cloud->Add_Fog($fog);
    }
   }




        foreach ($cloud->getFogs() as $obj){
            print_r($obj); 
        }
         print_r($cloud->getFogs());  //."<br>";
 