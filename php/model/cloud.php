<?php
class Cloud
{
  public $things = array();
  public $fogs = array();
  public $TimeProcessing;
  // Methods

  public $cloud_domain;
  public $cloud_id;
  
  public function Add_Fog($fog)
  {
    $this->fogs[] = $fog;
    return $this;
  }

  public function __toString(){
    return  "Cloud[cloud_domain: ".$this->cloud_domain."  --  cloud_id: ". $this->cloud_id."]";
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
  /**
   * Get the value of cloud_id
   */ 
  public function getCloud_id()
  {
    return $this->cloud_id;
  }

  /**
   * Set the value of cloud_id
   *
   * @return  self
   */ 
  public function setCloud_id($cloud_id)
  {
    $this->cloud_id = $cloud_id;

    return $this;
  }

  /**
   * Get the value of cloud_domain
   */ 
  public function getCloud_domain()
  {
    return $this->cloud_domain;
  }

  /**
   * Set the value of cloud_domain
   *
   * @return  self
   */ 
  public function setCloud_domain($cloud_domain)
  {
    $this->cloud_domain = $cloud_domain;

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
  public function Add_Thing($thing)
  {
    $this->things[] = $thing;
     return $this;
  }
  }
 