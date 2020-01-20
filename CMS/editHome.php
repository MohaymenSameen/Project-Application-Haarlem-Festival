<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-searchUsers.css" rel="stylesheet" type="text/css">
    </head>
    <body> 
    <div class="navbar">
        <ul>
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php">Jazz</a></li>
            <li><a href="../Dance/Dance.html">Dance</a></li>
            <li><a href="../Food.html">Food</a></li>
            <li><a href="admin.php">Volunteer</a></li>

           
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
      
    <section>
        <h1>Edit Home Page </h1>
    </section>
    <form>
        <div class="form-group">
                        <label>Header title:</label>
                        <input type="text" name="headerTitleHome" value="<?php echo $headerTitleHome; ?>">
                    </div>
                    <form action="/action_page.php">
                        <label>Header image:</label> 
                        <input type="file" name="picHome" accept="image/*">            
                    </form>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="dateHome" value="<?php echo $dateHome; ?>">
                    </div>
        </div>       
        <button class="buttonsLila" type="button">Save</button>
</form>     

</body>
</html>