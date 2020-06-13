<?php 
  	session_start();
  
	include_once '../model/class.user.php';
	  $user = new User();

	//get user's details from form if they're provided
	if (isset($_POST['Login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
	    $login = $user->check_login($email, $password);
	    if ($login) {
	        // Log in Success
	       header("location:home.php");
	    } else {
	        // Log in Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container"> 
	  <!-- Navigation -->
	  <header> <a href="../index.php">
		<h4 class="logo">DAWGS</h4>
	  </a>
		<nav>
		  <ul>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="login.php">LOG IN</a></li>
		  </ul>
		</nav>
	  </header>
		
		<form id="form" class="login_form" method="POST" ation="#">
            <h1>Login</h1><br><br>            
			<input type="text" id="email" name="email" placeholder="Email" onkeydown="validation()"><br>
			<span id="text"></span><br><br><br>            
            <input type="password" name="password" placeholder="Password"><br><br><br>
            <input type="submit" name="Login" value="Login"><br><br><br>
            <a href="forgot_password.php">Forgot Your Password?<br><br></a>
            <a href="register.php">New to DAWGS?<br><strong>Sign Up</strong></a><br><br><br>
		</form>
		
		<script type="text/javascript">

			function validation()
			{
				var form = document.getElementById("form");
				var email = document.getElementById("email").value;
				var text = document.getElementById("text");
				var pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;

				if (email.match(pattern)){
					farm.classList.add("valid");
					farm.classList.remove("invalid");
					text.innerHTML = "Your Email address is valid.";
					text.style.color = "#00ff00";
				}
				else{
					form.classList.remove("valid");
					farm.classList.add("invalid");
					text.innerHTML = "Please enter a valid Email address.";
					text.style.color = "#ff0000";
				}

				if (email == ""){
					farm.classList.remove("valid");
					farm.classList.remove("invalid");
					text.innerHTML = "";
					text.style.color = "#00ff00";
				}
			}

		</script>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>
