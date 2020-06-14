<?php
    require_once ('../../ShoppingCart/shopping_cart.php');
    require_once ('../../dbconnection/dbconnection.php');
    require_once ('../controller/payment_controller.php');

    $paymentController = new PaymentController();
    $shoppingCart = new ShoppingCart();
    $mysqli = new database();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../payment_style.css" type="text/css" rel="stylesheet"/>
    <title>Checkout</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="../../Jazz/view/jazz_view.php">Jazz</a></li>
            <li><a href="Dance.html">Dance</a></li>
            <li><a href="Food.html">Food</a></li>
            <li><a href="../CMS/admin.php">Volunteer</a></li>
        </ul>
    </div>
    <h1>Checkout</h1>
    <h2>Thank you for ordering. Please fill in the details to complete your order.</h2>

    <div class="review">        
        <div id="heading">
            <h1>1. Order Review</h1>
        </div>
        <?php         

            if(!empty($_SESSION['shopping_cart']))
            {
                $shoppingCart->displayShoppingCart();
                $shoppingCart->removeFromCart();
            } 
            else
            {
                //header("Location: ../../Home/view/home_view.php");
                echo "shopping cart empty";
            } 
            
            //if button clicked initialize payment system 
            if(isset($_POST['submit']))
            {
                $firstname = $mysqli->escape_string($_POST['firstname']);
                $lastname = $mysqli->escape_string($_POST['lastname']);
                $email_address = $mysqli->escape_string($_POST['email_address']); 
                $paymentMethod = $mysqli->escape_string($_POST['payment']);                                        
                $paymentController->payment($firstname,$lastname,$email_address,$paymentMethod);  
                unset($_SESSION['shopping_cart']);
            }
        ?>      
    </div>

    <form method="POST" name="details" onsubmit="return mandatory();">
        <div class="customer">
            <div id="heading2">
                <h1>2. Billing Address</h1>           
            </div>   
            <div class="inline">                             
                <input type="text" class="inline" name="firstname" placeholder="First Name">
                <input type="text" class="inline" name="lastname" placeholder="Last Name">
                <input type="text" class="inline" name="email_address" placeholder="Email Address" id="email">      
            </div>      
        </div>
        <div class="payment">
            <div id="heading3">
                <h1>3. Payment Method</h1>
            </div>        
            <br>                  
            <input type="radio" name="payment" value="creditcard" style="width:20px; height:20px; margin-left: 10%;"><label>Credit Card</label><br><br>
            <input type="radio" name="payment" value="inghomepay" style="width:20px; height:20px; margin-left: 10%;"><label>inghomepay</label><br><br>
            <input type="radio" name="payment" value="ideal" style="width:20px; height:20px; margin-left: 10%;"><label>IDEAL</label><br><br><br>        
        </div>    
            <input type="hidden" name="submit">
            <button type="submit" class="checkout"><span>Checkout</span></button>
    </form>
    <div class="footer">        
        <p class="left">All rights reserved &copy; 2019</p>            
        <img class="right" src="../../Home/img/facebook.png">
        <img class="right" src="../../Home/img/instagram.png">
        <img class="right" src="../../Home/img/youtube.png">
        <img class="right" src="../../Home/img/logo_H.png">
    </div>
    <script src ="../../Jazz/js/script.js">
    </script>
</body>
</html>