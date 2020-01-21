<?php
    require_once("../model/searchUserModel.php");
    
    class searchUserController
    {
        
        public function ReceiveDataEmail($email){
            $Model=new SearchUserModel();
            $var = $Model->getDataEmail($email); //string the data received from the model
            return $var;
        }

        public function ReceiveDataName($name){
            $Model=new SearchUserModel();
            $var = $Model->getDataName($name); //string the data received from the model
            return $var;
        }

        public function ReceiveDataRole($role){
            $Model=new SearchUserModel();
            $var = $Model->getDataName($role); //string the data received from the model
            return $var;
        }

       

    }
    
?>