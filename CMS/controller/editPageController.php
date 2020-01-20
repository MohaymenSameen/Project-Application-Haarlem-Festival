<?php
    require_once("../model/editPageModel.php");
    
    class EditPageController
    {
        
        public function ReceiveDataJazz(){
            $Model=new EditPageModel();
            $var = $Model->getDataJazz(); //string the data received from the model
            return $var;
        }

        public function UpdateDataJazz($title, $heading1, $ph1, $heading2, $heading3){
            $Model=new editPageModel();
            $var = $Model->updateDataJazz($title, $heading1, $ph1, $heading2, $heading3);            
        }

        public function ReceiveDataDance(){
            $Model=new EditPageModel();
            $var = $Model->getDataDance(); //string the data received from the model
            return $var;
        }

        public function UpdateDataDance($title, $heading, $sub, $info, $b1, $b2, $b3, $b4, $corss, $pass1, $pass2, $pass3, $pass4){
            $Model=new editPageModel();
            $var = $Model->updateDataDance($title, $heading, $sub, $info, $b1, $b2, $b3, $b4, $corss, $pass1, $pass2, $pass3, $pass4);            
        }

    }
    
?>