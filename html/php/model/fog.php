<?php
class Fog
{
  public $things = array();
  public $TimeProcessing;
  // Methods

  public function Add_Thing($thing)
  {
    $things[] = $thing;
  }

  /**
   * Get the value of things
   */
  public function getThings()
  {
    return $this->things;
  }

  /**
   * Set the value of things
   *
   * @return  self
   */
  public function setThings($things)
  {
    $this->things = $things;

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
}
