<?php
session_start();
include_once '../model/class.user.php';
$user = new User(); $uid = $_SESSION['uid']; //set user's id

//check if user is logged in
if (!$user->get_session()){
 header("location:login.php");
}

//log out the user
if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }

 //get user's changes from the form
 if (isset($_POST['save'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$user->update_data($email,$name,$password); //update the database
	}
?>

<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="container"> 
		<!-- Navigation -->
		<header> <a href="home.php">
			<h4 class="logo">DAWGS</h4>
		</a>
			<nav>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="Search.php">SEARCH</a></li>
				<li><a href="home.php?q=logout">LOG OUT</a></li>
			</ul>
			</nav>
			<p>Hello, <?php $user->get_fullname($uid); ?>!</p>
		</header>
			
			<form class="login_form" method="POST" ation="#">
				<h1>Edit Profile</h1><br><br>            
				<input type="text" name="email" value= "<?php echo $user->get_email($uid)?>" placeholder="New Email"><br><br><br>
				<input type="text" name="name" value= "<?php $user->get_fullname($uid) ?>" placeholder="New Name"><br><br><br>            
				<input type="password" name="password" placeholder="New or current password">
				<p>Please enter your new or current password before clicking the Save button!</p><br><br>
				<input type="submit" name="save" value="Save"><br><br><br>
			</form>
			
		<!-- Copyrights Section -->
		<div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	<!-- Main Container Ends -->
	</body>
</html>