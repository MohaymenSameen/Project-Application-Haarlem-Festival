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
 
    <section>
        <h1>Edit Dance Page </h1>
    </section>
    <section> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Header title:</label>
                <input type="text" name="headerTitleD" value="<?php echo $headerTitleD; ?>">
            </div>
            <form action="/action_page.php">
                <label>Header image:</label> 
                <input type="file" name="picDHeader" accept="image/*">            
            </form>
            <div class="form-group">
                <label>Paragraph 1 title:</label>
                <input type="text" name="phTitleD" value="<?php echo $phTitle; ?>">
            </div>
            <div class="form-group">
                <label>Paragraph 1 subtitle:</label>
                <input type="text" name="phSubitleD" value="<?php echo $phTitle; ?>">
            </div>
            <div class="form-group">
                <label>Paragraph 1 text:</label>
                <input type="text" name="phTxtD" value="<?php echo $phTxt; ?>">
            </div>
            <div class="form-group">
                <label>Text Box 1:</label>
                <input type="text" name="box1" value="<?php echo $box1; ?>">
            </div>
            <div class="form-group">
                <label>Text Box 2:</label>
                <input type="text" name="box2" value="<?php echo $box2; ?>">
            </div>
            <div class="form-group">
                <label>Text Box 3:</label>
                <input type="text" name="box3" value="<?php echo $box3; ?>">
            </div>
            <div class="form-group">
                <label>Text Box 4:</label>
                <input type="text" name="box4" value="<?php echo $box4; ?>">
            </div>
            <form action="/action_page.php">
                <label>Intermediate image:</label> 
                <input type="file" name="picD" accept="image/*">            
            </form>
            <div class="form-group">
                <label>Date 1:</label>
                <input type="text" name="date1D" value="<?php echo $date1; ?>">
            </div>
            <div class="form-group">
                <label>Date 2:</label>
                <input type="text" name="date2D" value="<?php echo $date2; ?>">
            </div>
            <div class="form-group">
                <label>Date 3:</label>
                <input type="text" name="date3D" value="<?php echo $date3; ?>">
            </div>
            <div class="form-group">
                <label>Cross-selling text:</label>
                <input type="text" name="CStxt" value="<?php echo $CStxt; ?>">
            </div>
            <div class="form-group">
                <label>Pass type 1:</label>
                <input type="text" name="PT1" value="<?php echo $PY1; ?>">
            </div>
            <div class="form-group">
                <label>Pass type 2:</label>
                <input type="text" name="PT2" value="<?php echo $PY2; ?>">
            </div>
            <div class="form-group">
                <label>Pass type 3</label>
                <input type="text" name="PT3" value="<?php echo $PT3; ?>">
            </div>
            <div class="form-group">
                <label>Pass type 4</label>
                <input type="text" name="PT4" value="<?php echo $PY4; ?>">
            </div>
            <button class="buttonsLila" type="button">Save</button>
        </form>
    </section> 
</body>
</html>