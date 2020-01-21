<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/service/Service.php';

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";


 // Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


            
    // Check if e-mail is empty
    if(empty(trim($_POST["email"]))){ //removes white space
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }


    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, `password` FROM user WHERE email = ?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $email, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: admin.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                            echo $password_err;
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with this e-mail.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
    }

    // Close connection <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">pod rel stylesheet
    $mysqli->close();
}
?>