<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-managePages.css" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
        <script>
      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('#sidenav ul li a'),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target + '.php');
          
          // Stop normal link behavior
          return false;
        });
      });
    </script>
    </head>
    <body>   
    <div class="navbar">
        <ul>
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php"><strong>Jazz</strong></a></li>
            <li><a href="Dance.html">Dance</a></li>
            <li><a href="Food.html">Food</a></li>
            <li><a href="../CMS/admin.php">Volunteer</a></li>

           
           <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()"><img src="../Jazz/img/shopping_cart.png"><span>Items</span></button>     

            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
            </div>
        </ul>
      </div>
      <nav id="sidenav">
        <ul>
            <li><a href="#" data-target="managePages">Manage Pages</a></li>
            <li><a href="#" data-target="editProfile">Profile</a></li>
            <li><a href="#" data-target="searchUsers">Search Users</a></li>
            <li><a href="#" data-target="">Manage Reservations</a></li>
            <li><a href="#" data-target="invoices">Invoices</a></li>
            <li><a href="#" data-target="createInvoice">Create Invoice</a></li>
            <li><a href="#" data-target="registerPayment">Register Payment</a></li>
            <li><a href="#" data-target="">Scan Tickets</a></li>
            <li><a href="#" data-target="">Export Data</a></li>
            <li><a href="#" data-target="view/createAcc">Create Account</a></li>
        </ul>
      </nav>
      
        <div id="content">
            <?php include('managePages.php'); ?>
        </div>
    </body>
    
    <footer id="footer">
            <p class="left">All rights reserved &copy; 2019</p>

            <img class="right" src="img/logo_H.png">
            <img class="right" src="img/facebook.png">
            <img class="right" src="img/instagram.png">

            <img class="right" src="img/youtube.png">
        </footer>

</html>