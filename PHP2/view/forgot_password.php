<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forgot Password</title>
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
		
		<form class="login_form" method="POST" action="../controller/send_link.php">
            <h1>Password Reset</h1><br><br>            
            <input type="text" name="email" placeholder="Email"><br>
			<h2>A link, which you can use to reset your password, will be sent to your email after you press the button.</h2>
            <input type="submit" name="submit_email" value="Send email"><br><br><br>
		</form>
		
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>
