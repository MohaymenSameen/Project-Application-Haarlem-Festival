<?php
include "../database_con.php";

class User{

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

    /*** for registration process ***/
    public function reg_user($xname, $xpassword, $xemail){

        $password = mysqli_real_escape_string($this->db, $xpassword); //avoid sql injection
        $name = mysqli_real_escape_string($this->db, $xname); //avoid sql injection
        $email = mysqli_real_escape_string($this->db, $xemail); //avoid sql injection

        $password = password_hash($password, PASSWORD_DEFAULT); //encrypt password
        $sql="SELECT * FROM user WHERE email='$email'";

        //checking if the username or email is available in db
        $check =  $this->db->query($sql) ;
        $count_row = $check->num_rows;
        $date = date("Y-m-d");
        //if the username is not in db then insert to the table
        if ($count_row == 0){
            $sql1="INSERT INTO user SET name='$name', email='$email', password='$password', reg_date= current_date()";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot be inserted");
            return $result;
        }
        else { return false;}
    }

    /*** for login process ***/
    public function check_login($xemail, $xpassword){

        $password = mysqli_real_escape_string($this->db, $xpassword); //avoid sql injection
        $email = mysqli_real_escape_string($this->db, $xemail); //avoid sql injection

        $sql2="SELECT reg_id from user WHERE email='$email'";
        $sqlCheckPass = "SELECT password FROM user WHERE email='$email' limit 1";
        $hashed_res = mysqli_query($this->db,$sqlCheckPass);
        $hashed = mysqli_fetch_object($hashed_res)->password;
        //checking if the username is available in the table
         $result = mysqli_query($this->db,$sql2);
        $user_data = mysqli_fetch_array($result);

        $count_row = $result->num_rows;

        if ($count_row == 1) { //check if there is exactly one instance of the user
            if(password_verify($password, $hashed))
            {
                // set session details
                $_SESSION['login'] = true;
                $_SESSION['uid'] = $user_data['reg_id'];
                //successful log in
                return true;
            }
            else
            {
                //no log in
                return false;
            }
        }
        else{
            //no log in
            return false;
        }
    }

    /*** for showing the name ***/
    public function get_fullname($uid){
        $sql3="SELECT name FROM user WHERE reg_id = $uid";
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result);
        echo $user_data['name'];
    }

    /*** for returning the email ***/
    public function get_email($uid){
        $sql3="SELECT email FROM user WHERE reg_id = $uid";
        $result = mysqli_query($this->db,$sql3);
        $user_data = mysqli_fetch_array($result);
        return $user_data['email'];
    }

    /*** starting the session ***/
    public function get_session(){
        return $_SESSION['login'];
    }

    /*** for loging out ***/
    public function user_logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }

    /*** for updating user details ***/
    public function update_data($xemail,$xname,$xpassword)
    {
        $password = mysqli_real_escape_string($this->db, $xpassword); //avoid sql injection
        $password = password_hash($password, PASSWORD_DEFAULT); //encrypt password
        $name = mysqli_real_escape_string($this->db, $xname); //avoid sql injection
        $newEmail = mysqli_real_escape_string($this->db, $xemail); //avoid sql injection
        $uid = $_SESSION['uid']; //get user id from session
        $currentEmail = $this->get_email($uid); //get the current email from database

        /*** email details ***/
        $from = "s626242@localhost";
        $to1 = $newEmail;
        $to2 = $currentEmail;
        $subject = "Personal data changed";
        $message = "Dear user, \n\n  There have been changes to your account. \n\n Current details:
        \n\n Current Email:".$newEmail." \n Old Email:".$currentEmail." \n Name: ".$name."";
        $headers = "From:" . $from;

        //send emails to both new and old email address
        if(!$to1 == $to2) //check if email has been updated by user, if so send to both new and old
        {
            mail($to1,$subject,$message, $headers);
            mail($to2,$subject,$message, $headers);
        }
        else
        {
            mail($to1,$subject,$message, $headers);
        }

        //update database
        $update_profile = mysqli_query($this->db, "UPDATE user SET name = '$name', email = '$newEmail', password = '$password' WHERE reg_id = '$uid'");

        //check if update is successful
        if ($update_profile) 
        {
            header("location: edit_success.php");
        } 
        else 
        {
        echo "There was an issue updating your details";
        }
    }

    /*** for searching users ***/
    public function search($text){

        $query = mysqli_real_escape_string($this->db, $text); //avoid sql injection
        //retreive any matches between the user's search query and databse records
        $result = mysqli_query($this->db, "SELECT * FROM user 
        WHERE name LIKE '$query' OR email LIKE '$query' 
        OR reg_date LIKE '$query'");

        return $result;
    }
}
?>