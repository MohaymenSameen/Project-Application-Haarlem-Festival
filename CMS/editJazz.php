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
        <h1>Edit Jazz Page </h1>
    </section>
    <section>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Header title:</label>
                    <input type="text" name="headerTitleJ" value="<?php echo $headerTitle; ?>">
                </div>
                <form action="/action_page.php">
                    <label>Header image:</label> 
                    <input type="file" name="picJazzHeader" accept="image/*">            
                </form>
                <div class="form-group">
                    <label>Paragraph 1 title:</label>
                    <input type="text" name="phTitleJ" value="<?php echo $phTitle; ?>">
                </div>
                <div class="form-group">
                    <label>Paragraph 1 text:</label>
                    <input type="text" name="phTxtJ" value="<?php echo $phTxt; ?>">
                </div>
                <form action="/action_page.php">
                    <label>Intermediate image:</label> 
                    <input type="file" name="picJazzInt" accept="image/*">            
                </form>
                <div class="form-group">
                    <label>Program Dates:</label>
                    <input type="text" name="datesHeader" value="<?php echo $datesHeader; ?>">
                </div>
                <div class="form-group">
                    <label>Date 1:</label>
                    <input type="text" name="date1J" value="<?php echo $date1; ?>">
                </div>
                <div class="form-group">
                    <label>Date 2:</label>
                    <input type="text" name="date2J" value="<?php echo $date2; ?>">
                </div>
                <div class="form-group">
                    <label>Date 3:</label>
                    <input type="text" name="date3J" value="<?php echo $date3; ?>">
                </div>

                <button class="buttonsLila" type="button">Save</button>
            </form>
    </section> 

</body>
</html>