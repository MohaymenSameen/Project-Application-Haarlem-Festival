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
      
    <section>
        <h1>Edit Dance Page </h1>
    </section>
    <form>                    
        <label>Header title: <input type="text" ></label> 
        <form action="/action_page.php">
            <label>Header image: <input type="text" ></label> 
            <input type="file" name="pic" accept="image/*">
            
        </form>
        <label>Paragraph 1 title:<input type="text"></label>
        <label>Paragraph 1 subtitle:<input type="text"></label>
        <label>Paragraph 1 text:<input type="text"></label>
        <label>Text Box 1:<input type="text"></label>
        <label>Text Box 2:<input type="text"></label>
        <label>Text Box 3:<input type="text"></label>
        <label>Text Box 4:<input type="text"></label>
        <form action="/action_page.php">
            <label>Intermediate image: <input type="text" ></label> 
            <input type="file" name="pic" accept="image/*">
            
        </form>        
        <label>Program Dates:<input type="text"></label><label>
        <label>Date 1:<input type="text"></label><label>
        <label>Date 2:<input type="text"></label><label> 
        <label>Date 3:<input type="text"></label><label>  
            
        
        <button class="buttonsLila" type="button">Save</button>
    </form> 

</body>
</html>