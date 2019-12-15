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
      <nav id="sidenav">
        <ul class="main">
            <li class="menu"><a href="#" data-target="managePages">Manage Pages</a></li>
            <li class="menu"><a href="#" data-target="editProfile">Profile</a></li>
            <li class="menu"><a href="#" data-target="searchUsers">Search Users</a></li>
            <li class="menu"><a href="manageReservations.html">Manage Reservations</a></li>
            <li class="menu"><a href="invoices.html">Invoices</a></li>
            <li class="menu"><a href="createInvoices.html">Create Invoice</a></li>
            <li class="menu"><a href="registerPayment.html">Register Payment</a></li>
            <li class="menu"><a href="scanTickets.html">Scan Tickets</a></li>
            <li class="menu"><a href="expportData.html">Export Data</a></li>
            <li class="menu"><a href="createAcc.html">Create Account</a></li>
        </ul>
    </nav>
        <footer id="footer">
            <p class="left">All rights reserved &copy; 2019</p>

            <img class="right" src="img/logo_H.png">
            <img class="right" src="img/facebook.png">
            <img class="right" src="img/instagram.png">

            <img class="right" src="img/youtube.png">
        </footer>

        <div id="content">
            <?php include('managePages.php'); ?>
          </div>
    </body>
</html>