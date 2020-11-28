<?php
  require_once('model/recommendationFeatures.php');
class criteria
{
   public  $Recommendation_Features = array(); 


  
    public function Add_Recommendation_Feature($Recommendation_Feature)
    {
        $this->Recommendation_Features[] = $Recommendation_Feature;
        return $this->Recommendation_Features;
    }
    /**
     * Get the value of Recommendation_Features
     */
    public function getRecommendation_Features()
    {
        return $this->Recommendation_Features;
    }

    /**
     * Set the value of Recommendation_Features
     *
     * @return  self
     */
    public function setRecommendation_Features($RF)
    {
        $this->Recommendation_Features = $RF;

        return $this;
    }
}
