<?php
class Cloud
{
  public $fogs = array();
  public $TimeProcessing;
  // Methods

  public function Add_Fog($fog)
  {
    $this->fogs[] = $fog;
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
   * Get the value of fogs
   */
  public function getFogs()
  {
    return $this->fogs;
  }

  /**
   * Set the value of fogs
   *
   * @return  self
   */
  public function setFogs($fogs)
  {
    $this->fogs = $fogs;

    return $this;
  }
}
