<?php
include "../database_con.php";

class Pass_forg{

    public $db;

        //connect to db immediately after user is initialised
    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //check if con is successful
        if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
                exit;
        }
    }

    public function check_email($xemail){
        echo "i'm here";
        $email = mysqli_real_escape_string($this->db, $xemail); //avoid sql injection
        //check if email is in database
        $query = mysqli_query($this->db,"SELECT email FROM user WHERE email='$email'");
        
        return $query;
    }

    public function update_pass($xemail, $xpass){

        $email = mysqli_real_escape_string($this->db, $xemail); //avoid sql injection
        $password = mysqli_real_escape_string($this->db, $xpass); //avoid sql injection
        //set new password
        $query = mysqli_query($this->db,"UPDATE user SET password='$pass' WHERE email='$email'");

    }
}
?>