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
      <li id="backBtn"><a href="../admin.php">Back CMS</a></li>
    <section>
        <h1 id="headerEdit">Edit Home Page </h1>
        <hr id="longLine"/>
    </section>
    <form>
        <div class="form-group">
                        <label>Header title:</label>
                        <input type="text" name="headerTitleHome" value="<?php echo $headerTitleHome; ?>">
                    </div>
                    <div class="form-group">
                        <form action="/action_page.php">
                            <label>Header image:</label> 
                            <input type="file" name="picHome" accept="image/*">            
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="dateHome" value="<?php echo $dateHome; ?>">
                    </div>
        </div>       
        <button class="buttonsLila" id="saveH" type="button">Save</button>
</form>   
<div class="footer">
        
        <p class="left">All rights reserved &copy; 2019</p>            
            <img class="right" src="img/logo_H.png">
            <img class="right" src="img/facebook.png">
            <img class="right" src="img/instagram.png">
        </div>  

</body>
</html>