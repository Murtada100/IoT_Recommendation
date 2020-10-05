<?php
class Recommendation_Feature
{
    public $title;
    public $Priority;
    public $weight;

    /**
     * Get the value of Priority
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * Set the value of Priority
     *
     * @return  self
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
