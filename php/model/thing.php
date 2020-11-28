<?php
class Thing
{
  public $TimeProcessing;
  public $Distance;
  public $Data_size;
  public $Rate_send;
  public $aim;

  public $thing_id;
  public $thing_domain;
  public $Frequency;
  public $Sensitivity;
  public $Freshness;
  public $Time;
  public $Volume;
  public $Criticality;


  /**
   * Get the value of Distance
   */
  public function getDistance()
  {
    return $this->Distance;
  }

  /**
   * Set the value of Distance
   *
   * @return  self
   */
  public function setDistance($Distance)
  {
    $this->Distance = $Distance;

    return $this;
  }

  /**
   * Get the value of Rate_send
   */
  public function getRate_send()
  {
    return $this->Rate_send;
  }

  /**
   * Set the value of Rate_send
   *
   * @return  self
   */
  public function setRate_send($Rate_send)
  {
    $this->Rate_send = $Rate_send;

    return $this;
  }

  /**
   * Get the value of Data_size
   */
  public function getData_size()
  {
    return $this->Data_size;
  }

  /**
   * Set the value of Data_size
   *
   * @return  self
   */
  public function setData_size($Data_size)
  {
    $this->Data_size = $Data_size;

    return $this;
  }

  /**
   * Get the value of TimeProcessing
   */
  public function getTimeProcessing()
  {
    return $this->TimeProcessing;
  }

  /**
   * Set the value of TimeProcessing
   *
   * @return  self
   */
  public function setTimeProcessing($TimeProcessing)
  {
    $this->TimeProcessing = $TimeProcessing;

    return $this;
  }

  /**
   * Get the value of aim
   */ 
  public function getAim()
  {
    return $this->aim;
  }

  /**
   * Set the value of aim
   *
   * @return  self
   */ 
  public function setAim($aim)
  {
    $this->aim = $aim;

    return $this;
  }
 

  public function __toString(){
    return  "Thing[thing_domain: ".$this->thing_domain."  -- ID: ".$this->thing_id
    ."  -- Frequency: ".$this->Frequency
    ."  -- Sensitivity: ".$this->Sensitivity
    ."  -- Freshness: ".$this->Freshness   
    ."  -- Time: ".$this->Time."  -- Volume: "
    .$this->Volume."  -- Criticality: "
    .$this->Criticality."]";
  }


  /**
   * Get the value of thing_domain
   */ 
  public function getThing_domain()
  {
    return $this->thing_domain;
  }

  /**
   * Set the value of thing_domain
   *
   * @return  self
   */ 
  public function setThing_domain($thing_domain)
  {
    $this->thing_domain = $thing_domain;

    return $this;
  }

 /**
  * Get the value of Criticality
  */ 
 public function getCriticality()
 {
  return $this->Criticality;
 }

 /**
  * Set the value of Criticality
  *
  * @return  self
  */ 
 public function setCriticality($Criticality)
 {
  $this->Criticality = $Criticality;

  return $this;
 }

 /**
  * Get the value of Frequency
  */ 
 public function getFrequency()
 {
  return $this->Frequency;
 }

 /**
  * Set the value of Frequency
  *
  * @return  self
  */ 
 public function setFrequency($Frequency)
 {
  $this->Frequency = $Frequency;

  return $this;
 }

 /**
  * Get the value of Sensitivity
  */ 
 public function getSensitivity()
 {
  return $this->Sensitivity;
 }

 /**
  * Set the value of Sensitivity
  *
  * @return  self
  */ 
 public function setSensitivity($Sensitivity)
 {
  $this->Sensitivity = $Sensitivity;

  return $this;
 }

 /**
  * Get the value of Freshness
  */ 
 public function getFreshness()
 {
  return $this->Freshness;
 }

 /**
  * Set the value of Freshness
  *
  * @return  self
  */ 
 public function setFreshness($Freshness)
 {
  $this->Freshness = $Freshness;

  return $this;
 }

 /**
  * Get the value of Time
  */ 
 public function getTime()
 {
  return $this->Time;
 }

 /**
  * Set the value of Time
  *
  * @return  self
  */ 
 public function setTime($Time)
 {
  $this->Time = $Time;

  return $this;
 }

 /**
  * Get the value of Volume
  */ 
 public function getVolume()
 {
  return $this->Volume;
 }

 /**
  * Set the value of Volume
  *
  * @return  self
  */ 
 public function setVolume($Volume)
 {
  $this->Volume = $Volume;

  return $this;
 }

 public function getCri()
 {
  return $this->Frequency." ".$this->Sensitivity." ".$this->Freshness." ".$this->Time." ".$this->Volume." ".$this->Criticality;
 }
 

  /**
   * Get the value of thing_id
   */ 
  public function getThing_id()
  {
    return $this->thing_id;
  }

  /**
   * Set the value of thing_id
   *
   * @return  self
   */ 
  public function setThing_id($thing_id)
  {
    $this->thing_id = $thing_id;

    return $this;
  }
}
