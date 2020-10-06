<?php
require_once('criteria.php');
require_once('model/recommendationFeatures.php');
require_once('model/cloud.php');
require_once('model/fog.php');
require_once('model/thing.php');

class Processing_placements
{

    public $cloud;
    public $Criteria;

    function __construct($cloud, $Criteria)
    {
        $this->cloud = $cloud;
        $this->Criteria = $Criteria;
        echo 'set palcement';
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
}
