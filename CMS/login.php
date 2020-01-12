<?php
include ('model/loginModel.php');

include ('controller/loginController.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav>
            <ul class="main">
                <li><a href="Home.html">Home</a></li>
                <li><a href="Jazz.html">Jazz</a></li>
                <li><a href="Dance.html">Dance</a></li>
                <li><a href="Food.html">Food</a></li>
                <li><a href="login.html">Volunteer</a></li>
            </ul>
            <ul class="secondary">
                <li><a>EN</a></li>
                <li><a>|</a></li>
                <li><a>NL</a></li>
            </ul>
            <div id="logo_square">
                    <div id="logo_div" class=""></div>
            </div>
            <div id="logo">
                    <img id="logo_img" src="img/logo.png"/>
            </div>
        </nav>
        <section>     
            <img  id="login" class="center" src="img/loginIcon.png" alt="Login icon">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">>
                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">  
                    <label> <img clas="iconsLogin"  src="img/unameicon.png" height="42" width="42"/><input type="text" name = "email" placeholder="E-mail..." class="form-control" value="<?php echo $email; ?>"></label> <!--premesti go v stylesheet-->
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label><img clas="iconsLogin" src="img/passicon.png" height="35" width="31"/><input type="password" placeholder="Password..." name="password" class="form-control"></label>
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>    
                
                <input type="submit" id="loginButton" value="LOGIN">
                <a href="reset-password.php">Forgot your password?</a>    
            </form> 

        </section>

        <footer id="footer">
            <p class="left">All rights reserved &copy; 2019</p>

            <img class="right" src="img/logo_H.png">
            <img class="right" src="img/facebook.png">
            <img class="right" src="img/instagram.png">

            <img class="right" src="img/youtube.png">
        </footer>
    </body>
</html>
