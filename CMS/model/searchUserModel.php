<?php
 require_once('../../dbconnection/dbconnection.php');
 include("../service/service.php");
 class SearchUserModel extends Database
 {
    public function getDataEmail($email){
        $sql="SELECT * from user WHERE email='$email'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }        
    }

    public function getDataName($name){
        $sql="SELECT * from user WHERE `name`='$name'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt 
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }        
    }
    public function getDataRole($role){
        $sql="SELECT * from user WHERE `role`='$role'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt 
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }        
    }
    public function search($text){

        $query = $text; 
        //retreive any matches between the user's search query and databse records
        $sql="SELECT * FROM user 
        WHERE `name` LIKE '$query' OR email LIKE '$query' 
        OR `role` LIKE '$query'";
        $result = $this->connect()->query($sql);

        return $result;
    }
 }
?>