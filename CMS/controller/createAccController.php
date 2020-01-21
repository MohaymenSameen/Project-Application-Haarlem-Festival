<?php
// Include config file
include $_SERVER['DOCUMENT_ROOT'] . '/service/service.php';
 
// Define variables and initialize with empty values
$password = $confirm_password = $email = $name = $phone = $role = "";
$password_err = $confirm_password_err = $email_err = $name_err = $phone_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
        //Validate E-mail
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter an E-mail.";
        } else{
            // Prepare a select statement
            $sql = "SELECT email FROM user WHERE email = ?";
            
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_email);
                
                // Set parameters
                $param_email = trim($_POST["email"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                    
                    if($stmt->num_rows == 1){
                        $email_err = "This E-mail has an account.";
                    } else{
                        $email = trim($_POST["email"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
        }

        //Check for Name
        if(empty(trim($_POST["namee"]))){
            $name_err = "Please enter a name.";
        }else{
            // Prepare a select statement
            $sql = "SELECT id FROM user WHERE name = ?";
            
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_name);
                
                // Set parameters
                $param_name = trim($_POST["namee"]);
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                    // store result
                    $stmt->store_result();
                                
                    $name = trim($_POST["namee"]);
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
        }
        
        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }

        
        // Check input errors before inserting in database
        if(empty($password_err) && empty($confirm_password_err) && empty($name_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO user (email, name, password, phone, role) VALUES (?, ?, ?, ?, ?)";
            
            if($stmt = $mysqli->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("sssss",$param_email, $param_name, $param_password, $param_phone, $param_role);
                
                // Set parameters
                $param_email = $email;
                $param_name = $name;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                $param_phone = $_POST['phone'];
                $param_role = $_POST['role'];
                
                
                // Attempt to execute the prepared statement
                if($stmt->execute()){
                   
                    header("Location: created.php");
                } else{
                    echo "Something went wrong. Please try again later."; 
                }
            }
        }
        
        // Close connection <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        $mysqli->close();
   
}
?>