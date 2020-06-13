<?php

include ("../model/class.pass_forg.php");

$forgot = new Pass_forg();

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
	  <header> <a href="home.php">
		<h4 class="logo">DAWGS</h4>
	  </a>
		<nav>
		  <ul>
			<li><a href="../index.php">HOME</a></li>
			<li><a href="login.php">LOG IN</a></li>
		  </ul>
		</nav>
      </header>
      
      <?php
            
            if($_GET['key'])
            {
              //get user's email from the URL
              $email=$_GET['key'];
              $select=$forgot->check_email($email); //check the email's in the database

            if(mysqli_num_rows($select)==1) //if it is
            {
        ?>
      <form class="login_form" method="post" action="../controller/submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <h1>Enter New password</h1><br><br><br>
    <input type="password" name='password' placeholder="Enter new password"><br><br><br>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
  else{ //if it isn't
    echo "This email is not in our database. Please make a new registration";
  }
}
?>
		
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>