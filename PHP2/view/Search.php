<?php
session_start();
include_once '../model/class.user.php';
$user = new User(); 
$uid = $_SESSION['uid']; //setting the user id from the session

//check if session is active
if (!$user->get_session()){
 header("location:login.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search</title>
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
			<li><a href="edit.php">EDIT PROFILE</a></li>
			<li><a href="home.php?q=logout">LOG OUT</a></li>
		  </ul>
		</nav>
		<!-- Welcome the user -->
		<p>Hello, <?php $user->get_fullname($uid); ?>!</p>
	  </header>
		
		<form class="login_form" method="GET" action="search_result.php">
            <h1>Search</h1><br>            
			<input type="text" name="query" placeholder = "name / email / date" /><br>
			<p>Just enter anything and press the Search
				 button to search the users' name, email or registration date.</p>
			<p>Date format: YYYY-MM-DD</p><br>
    		<input type="submit" value="Search" />
		</form>
		
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>
