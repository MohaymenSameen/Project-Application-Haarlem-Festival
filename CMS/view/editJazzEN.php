<?php
    include('../controller/editPageController.php');
    session_start();
    $controller = new EditPageController();
    $data = $controller->ReceiveDataJazz(); //using the session email that was use to log in and storing it into "data"
    
    //taking the info that we received from "data"
    foreach($data as $res){
        $headerTitleJ=$res['title'];
        $phTitleJ=$res['heading_1'];
        $phTxtJ=$res['paragraph_1'];
        $datesHeaderJ=$res['heading_2'];

    }
    
    //$_SERVER["REQUEST_METHOD"] == "POST"
    if(isset($_POST['submit'])) { 
        header("location: ../../Jazz/view/jazz_view.php");
        $newTitle = $_POST['title'];
        $NewHeader= $_POST['heading_1'];
        $NewPhar = $_POST['paragraph_1'];
        $NewHead = $_POST['heading_2'];
        
        $update = $controller->UpdateData($newTitle, $NewHeader, $NewPhar, $NewHead);
    } 
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="../css/style-searchUsers.css" rel="stylesheet" type="text/css">
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
            <button class="dropbtn" onclick="myFunction()"><img src="../../Jazz/img/shopping_cart.png"><span>Items</span></button>     

            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
            </div>
        </ul>
      </div>
      <li id="backBtn"><a href="../admin.php">Back to CMS</a></li>
    <section>
        <h1 id="headerEdit">Edit Jazz Page </h1>
        <hr id="longLine"/>
    </section>
    <section>
    
        <form action="#" method="post">
                <div class="form-group">
                    <label>Header title:</label>
                    <input type="text" name="headerTitleJ" value="<?php echo $headerTitleJ; ?>">
                </div>
                <div class="form-group">
                    <form action="/action_page.php">
                        <label>Header image:</label> 
                        <input type="file" name="picJazzHeader" accept="image/*">            
                    </form>
                </div>
                <div class="form-group">
                    <label>Paragraph 1 title:</label>
                    <input type="text" name="phTitleJ" value="<?php echo $phTitleJ; ?>">
                </div>
                <div class="form-group">
                    <label>Paragraph 1 text:</label>
                    <input type="text" name="phTxtJ" value="<?php echo $phTxtJ; ?>">
                </div>
                <div class="form-group">
                    <form action="/action_page.php">
                        <label>Intermediate image:</label> 
                        <input type="file" name="picJazzInt" accept="image/*">            
                    </form>
                </div>
                <div class="form-group">
                    <label>Program Dates:</label>
                    <input type="text" name="datesHeader" value="<?php echo $datesHeaderJ; ?>">
                </div>

                <input class="buttonsLila" type="submit" name="submit" value="Save"/>
            </form>
    </section> 
    <div class="footer">
        
        <p class="left">All rights reserved &copy; 2019</p>            
        </div>
</body>
</html>