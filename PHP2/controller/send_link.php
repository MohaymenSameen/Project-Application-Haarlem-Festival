<?php
include ("../model/class.pass_forg.php");

$forgot = new Pass_forg();

//check if form is submitted
if(isset($_POST['submit_email']) && $_POST['email'])
{
    //get email address
    $email = $_POST['email'];
    
    //email details
    $from = "s626242@localhost";
    $to = $email;
    $subject = "Reset Password Request";
    $message = "Dear user, \n\n  We have received a password change request for your account. Please click on the link below to reset you rpassword. \n\n Link: www.626242.infhaarlem.nl/reset_pass.php?key=".$email."";
    $headers = "From:" . $from;

    //send email and check if sent
    if(mail($to,$subject,$message, $headers)){
        echo "Check Your Email and Click on the link sent to your email";
    }
    else{
        echo "There was an issue sending the email. Please try again!";
    }

  }
?>