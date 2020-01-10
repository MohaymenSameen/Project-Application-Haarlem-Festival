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
        <section>
            <h1><img src="../CMS/img/editProfileicon.png" alt="icon search users"> Search Users</h1>
            <hr id="longLine"/>
        </section>
        <!-- <form>                    
            <label>Email Address <input type="text" ></label> 
            <label>Password<input type="password" placeholder="Password..."></label>
            <label>Confirm Password<input type="password" placeholder="*********"></label>        
            <label>Name<input type="text" placeholder="John Doe"></label>
            <label>Username<input type="text" placeholder="John Doe"></label>
            <button class="buttonsLila" type="button">Create</button>
            
        </form> 
-->
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Name</label>
                <input type="text" name="namee" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span> 
            </div>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <label>Choose a role</label>            
          <input type = "radio" value="admin"
                 name = "role"
                 id = "admin"
                 checked = "checked" />
          <label for = "sizeSmall">admin</label>
          <input type = "radio" value="super admin"
                 name = "role"
                 id = "super" />
          <label for = "sizeMed">super admin</label>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </body>
</html>
    