<?php
class Fog
{
  public $things = array();
  public $TimeProcessing;
  // Methods

  public $fog_domain;
  public $fog_id;

  
  public function Add_Thing($thing)
  {
    $this->things[] = $thing;
     return $this;
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

  public function __toString(){
    return  "Fog[fog_domain: ".$this->fog_domain."  -- fog_id: ". $this->fog_id."]";
  }
 
  
  /**
   * Get the value of fog_domain
   */ 
  public function getFog_domain()
  {
    return $this->fog_domain;
  }

  /**
   * Set the value of fog_domain
   *
   * @return  self
   */ 
  public function setFog_domain($fog_domain)
  {
    $this->fog_domain = $fog_domain;

    return $this;
  }

  /**
   * Get the value of fog_id
   */ 
  public function getFog_id()
  {
    return $this->fog_id;
  }

  /**
   * Set the value of fog_id
   *
   * @return  self
   */ 
  public function setFog_id($fog_id)
  {
    $this->fog_id = $fog_id;

    return $this;
  }
}
