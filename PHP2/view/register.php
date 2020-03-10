<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lc0-MEUAAAAAL8z-rF1ODDNR5mCRibtFQdcDLl9',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {

      include_once '../model/class.user.php';  

      $user = new User();
      //check if form submitted and get user's details
      if (isset($_POST['Register'])){
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);

      //update database
      $register = $user->reg_user($name, $password, $email);
      if ($register) {
      // Registration Success
      echo "Registration successful <a href='login.php'>Click here</a> to login";
      } else {
      // Registration Failed
      echo "Registration failed. Email or Username already exits please try again";
}
}
    }
} else { ?>


<!doctype html>
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
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
		
		<form class="login_form" method="POST" ation="#">
            <h1>Register</h1><br><br>
			<input type="text" name="name" placeholder="Name"><br><br><br>            
            <input type="text" name="email" placeholder="Email"><br><br><br>            
			<input type="password" name="password" placeholder="Password"><br><br><br>
			<div class="g-recaptcha" data-sitekey="6Lc0-MEUAAAAAOxYsC-6AStDgJpnxcbnlcVIzolw
			
			"></div>
            <input type="submit" name="Register" value="Register"><br><br><br>
        </form>
		
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>

<?php } ?>

