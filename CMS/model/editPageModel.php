<?php
 require_once('../../dbconnection/dbconnection.php');
 class EditPageModel extends Database
 {
    public function getDataJazz(){
        $sql="SELECT * from jazz_content_en"; //dovyrshi tova query i napravi za vseki edit page taka 
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }
        
    }
    

    public function updateDataJazz($title, $heading, $ph1, $heading2){
        
    $sql="UPDATE `jazz_content_en` SET title ='$title', heading_1='$heading1', paragraph_1='$ph1', heading_2='$heading2'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt

    }

    public function getDataDance(){
        $sql="SELECT * from dance_content"; //dovyrshi tova query i napravi za vseki edit page taka 
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }
        
    }
    

    public function updateDataDance(($title, $heading, $sub, $info, $b1, $b2, $b3, $b4, $cross, $pass1, $pass2, $pass3, $pass4){
        
    $sql="UPDATE `dance_content` SET title ='$title', heading='$heading', subheading='$sub', information='$info', bubble1='$b1', bubble2='$b2', bubble3='$b3', bubble4='$b4', cross_sell='$cross', pass1='$pass1', pass2='$pass2', pass3='$pass3', pass4='$pass4'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt

    }
 }
?>