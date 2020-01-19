<?php
    require_once ('../model/home_model.php');
    class HomeController extends HomeModel
    {       
        public function recieveCountdown()
        {            
            $row = $this->getCountdown();            
            return $row;
        }        
    }
?>