<?php

include ("../model/class.pass_forg.php");

$forgot = new Pass_forg();

//check if form is submitted
if(isset($_POST['submit_password']) && $_POST['key'])
{
  //get email and password
  $email=$_POST['email'];
  $pass=$_POST['password'];

  //update database
  $forgot->update_pass($email,$pass);
  
  //redirect user to another page
  echo "Password reset successful";
  echo "<a href=\\../view/login.php>Click here to log in</a>";
}
else
{
 echo "There was an issue! Please try again!";
}
?>