<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../payment_style.css" type="text/css" rel="stylesheet"/>
    <title>Check Out</title>
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
        <form method="POST">
        <div id="heading">
            <h1>1. Order Review</h1>
        </div>
        <?php           
            if(isset($_SESSION['band']))
            {
                echo '<h2 id="band">'.$_SESSION['band']," (",$_SESSION['date'],") ".'</h2>'; 
                if($_SESSION['quan'] != 1)
                {
                    if($_SESSION['price'] == "Free")
                    {
                        echo '<h2 id="quantity">'.$_SESSION['quan'],"x   ",$_SESSION['price'].'</h2>';
                    }
                    else
                    {
                        $newPrice = $_SESSION['quan'] * $_SESSION['price'];
                        echo '<h2 id="quantity">'.$_SESSION['quan'],"x   &euro;",$newPrice.'</h2>';
                    }                                                       
                }
                else
                {
                    if($_SESSION['price'] == "Free")
                    {
                        echo '<h2 id="quantity">'.$_SESSION['quan'],"x   ",$_SESSION['price'].'</h2>';
                    }
                    else
                    {
                        echo '<h2 id="quantity">'.$_SESSION['quan'],"x   &euro;",$_SESSION['price'].'</h2>';
                    }
                }                
            }            
            if(isset($_SESSION['pass']))
            {
                echo '<h2 id="band">'.$_SESSION['pass'].'</h2>'; 
                echo '<h2 id="quantity">'.$_SESSION['quant'],"x &euro;  ",$_SESSION['accprice'].'</h2>';                
            }
            if(empty($_SESSION['pass']) && empty($_SESSION['band']))
            {
                header("Location: ../../Home/view/home_view.php");
            }
            echo '<input type="hidden" name="delete" value="add"/>';
            echo '<button type="submit" class="delete">X</button>'; 
           // echo("<button type='button' class='delete' onclick=\"location.href='../../Home/view/home_view.php'\">x</button>");
            if(isset($_POST['delete']))
            {
                session_destroy();
                header("Location: ../../Home/view/home_view.php");
            }   
            echo ' <hr>';
                
            if(isset($_SESSION['price']) && $_SESSION['price'] == "Free")
            {
                echo '<h3>'."Cart Total: ",$_SESSION['price'].'</h3>';
            }
            else if(isset($_SESSION['price']) && $_SESSION['price'] != "Free")
            {
                $newPrice = $_SESSION['quan'] * $_SESSION['price'];
                echo '<h3>'."Cart Total: &euro; ",$newPrice.'</h3>';
            }

            if(isset($_SESSION['pass']))
            {
                if($_SESSION['quant'] != 1)
                {
                    $newPrice = $_SESSION['quant'] * $_SESSION['accprice'];
                    echo '<h3>'."Cart Total: &euro; ",$newPrice.'</h3>';
                }
                else
                {
                    echo '<h3>'."Cart Total: &euro;",$_SESSION['accprice'].'</h3>';
                }
            }
        ?>      
        </form>
    </div>

    <div class="customer">
        <div id="heading2">
            <h1>2. Billing Address</h1>           
        </div> 
        <form class="inline" method="POST">                       
            <input type="text" name="firstname" placeholder="First Name*">
            <input type="text" name="lastname" placeholder="Last Name*">
            <input type="text" name="email_address" placeholder="Email Address*" id="email"> 
            <input type="text" name="phone" placeholder="Phone Number"> 
            <input type="text" name="country" placeholder="Country">            
        </form> 
        <h3>*Means Mandatory</h3>
    </div>
    <div class="payment">
        <div id="heading3">
            <h1>3. Payment Method</h1>
        </div>
        <form method="POST">
        <br><br><br><br>
            <input type="radio" name="payment" value="Credit Card" style="width:20px; height:20px; margin-left: 10%;"><label>Credit Card</label><br><br><br>
            <input type="radio" name="payment" value="Pin" style="width:20px; height:20px; margin-left: 10%;"><label>Pin</label><br><br><br>
            <input type="radio" name="payment" value="Cash" style="width:20px; height:20px; margin-left: 10%;"><label>Cash</label><br><br><br><br><br><br><br><br>
        </form>
    </div>
    <button type="submit" class="checkout"><span>Checkout</span></button>
    <div class="footer">
        
        <p class="left">All rights reserved &copy; 2019</p>            
        <img class="right" src="../../Home/img/facebook.png">
        <img class="right" src="../../Home/img/instagram.png">
        <img class="right" src="../../Home/img/youtube.png">
        <img class="right" src="../../Home/img/logo_H.png">
    </div>
</body>
</html>