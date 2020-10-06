<?php
class Thing
{
  public $TimeProcessing;
  public $Distance;
  public $Data_size;
  public $Rate_send;
  public $aim;


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
    return  "Thing[TimeProcessing: ".$this->TimeProcessing."  -- Distance: ".$this->Distance
    ."  -- Data_size: ".$this->Data_size
    ."  -- Rate_send: ".$this->Rate_send
    ."  -- aim: ".$this->aim."]";
  }

}
