<?php
require_once('criteria.php');
require_once('model/recommendationFeatures.php');
require_once('model/cloud.php');
require_once('model/fog.php');
require_once('model/thing.php');

class storage_placements
{

    private $cloud;
    private $Criteria;

    private $Frequency_weight = 1;
    private $Sensitivity_weight = 1;
    private $Freshness_weight = 1;
    private $Time_weight = 1;
    private $Volume_weight = 1;
    private $Criticality_weight = 1;
    
    private $Criteria_weight = array();


    function __construct($cloud, $Criteria)
    {
        $this->cloud = $cloud;
        $this->Criteria = $Criteria;
        //  echo 'set palcement at storage_placements';
        $this->setCriteria_weight();
    }

    /**
     * Set the value of Criteria_weight
     *
     * @return  self
     */
    public  function setCriteria_weight()
    {
        $this->Criteria_weight =  array(
            array("Frequency", $this->Frequency_weight),
            array("Sensitivity", $this->Sensitivity_weight),
            array("Freshness", $this->Freshness_weight),
            array("Time", $this->Time_weight),
            array("Volume", $this->Volume_weight),
            array("Criticality", $this->Criticality_weight)
        );

        return $this;
    }

    /**
     * Get the value of cloud
     */
    public function getCloud()
    {
        return $this->cloud;
    }

    /**
     * Set the value of cloud
     *
     * @return  self
     */
    public function setCloud($cloud)
    {
        $this->cloud = $cloud;

        return $this;
    }

    /**
     * Get the value of Criteria
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }

    /**
     * Set the value of Criteria
     *
     * @return  self
     */
    public function setCriteria($Criteria)
    {
        $this->Criteria = $Criteria;

        return $this;
    }




    /**
     * Get the value of Frequency_weight
     */
    public function getFrequency_weight()
    {
        return $this->Frequency_weight;
    }

    /**
     * Set the value of Frequency_weight
     *
     * @return  self
     */
    public function setFrequency_weight($Frequency_weight)
    {
        $this->Frequency_weight = $Frequency_weight;
        $this->setCriteria_weight();
        return $this;
    }

    /**
     * Get the value of Sensitivity_weight
     */
    public function getSensitivity_weight()
    {
        return $this->Sensitivity_weight;
    }

    /**
     * Set the value of Sensitivity_weight
     *
     * @return  self
     */
    public function setSensitivity_weight($Sensitivity_weight)
    {
        $this->Sensitivity_weight = $Sensitivity_weight;
        $this->setCriteria_weight();
        return $this;
    }

    /**
     * Get the value of Freshness_weight
     */
    public function getFreshness_weight()
    {
        return $this->Freshness_weight;
    }

    /**
     * Set the value of Freshness_weight
     *
     * @return  self
     */
    public function setFreshness_weight($Freshness_weight)
    {
        $this->Freshness_weight = $Freshness_weight;
        $this->setCriteria_weight();
        return $this;
    }

    /**
     * Get the value of Time_weight
     */
    public function getTime_weight()
    {
        return $this->Time_weight;
    }

    /**
     * Set the value of Time_weight
     *
     * @return  self
     */
    public function setTime_weight($Time_weight)
    {
        $this->Time_weight = $Time_weight;
        $this->setCriteria_weight();
        return $this;
    }

    /**
     * Get the value of Volume_weight
     */
    public function getVolume_weight()
    {
        return $this->Volume_weight;
    }

    /**
     * Set the value of Volume_weight
     *
     * @return  self
     */
    public function setVolume_weight($Volume_weight)
    {
        $this->Volume_weight = $Volume_weight;
        $this->setCriteria_weight();
        return $this;
    }

    /**
     * Get the value of Criticality_weight
     */
    public function getCriticality_weight()
    {
        return $this->Criticality_weight;
    }

    /**
     * Set the value of Criticality_weight
     *
     * @return  self
     */
    public function setCriticality_weight($Criticality_weight)
    {
        $this->Criticality_weight = $Criticality_weight;
        $this->setCriteria_weight();
        return $this;
    }
}
