<?php
 require_once('../../dbconnection/dbconnection.php');
 class EditPageModel extends Database
 {
    public function getDataJazz(){
        $sql="SELECT * from user WHERE email='$email'"; //dovyrshi tova query i napravi za vseki edit page taka 
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt
        $row=$result->fetch_assoc(); //gets the result and stores it in array row
        $count=$result->num_rows;
        if($count>0){
            $rows[]=$row;
            return $rows;
        }
        
    }
    

    public function updateData($email, $password, $phone){
        echo $email;
    $sql="UPDATE `user` SET email ='$email', `password`='$password', phone='$phone' WHERE email='{$_SESSION['email']}'";
        $result = $this->connect()->query($sql); //izvyrshvaneto na stmt
    }
 }
?>