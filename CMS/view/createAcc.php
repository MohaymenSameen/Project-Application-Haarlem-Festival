<?php
    include ('../controller/createAccController.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-searchUsers.css" rel="stylesheet" type="text/css">
    </head>
    <body>    
    <section class="section">
            <h1><img src="img/editProfileicon.png" alt="create account"> Create Account</h1>
            <hr id="longLine"/>
        </section>
        <section class="secondsections">
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group" <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
                <label>E-mail Address</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <span><?php echo $email_err; ?></span>
            </div>
            <div class="form-group" <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>>
                <label>Name</label>
                <input type="text" name="namee"  value="<?php echo $name; ?>">
                <span><?php echo $name_err; ?></span> 
            </div>   
            <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>">
                <span><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <span><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Choose a role:</label>    
                <label for = "sizeSmall">volunteer</label>
                <input id = "rad" type = "radio" value="admin"
                    name = "role"
                    id = "admin"
                    checked = "checked" />

                    <label for = "sizeMed">super admin</label>  
                    <input id = "rad" type = "radio" value="super admin"
                    name = "role"
                    id = "super" />                  
            </div> 
            <div class="form-group" <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>>
                <label>Phone number</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span ><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group" >
                <input class = "buttonsLila" id= "createAcc" type="submit" class="btn btn-primary" value="Create">
            </div>
        </form>
</section>
    </body>
</html>
    