<?php
    include('../controller/editPageController.php');
    session_start();
    $controller = new EditPageController();
    $data = $controller->ReceiveDataDance(); //using the session email that was use to log in and storing it into "data"
    
    //taking the info that we received from "data"
    foreach($data as $res){
        $TitleD=$res['title'];
        $headerTitleD=$res['heading'];
        $phTitleD=$res['subheading'];
        $phTxtD=$res['parinformationagraph_1'];
        $box1=$res['bubble1'];
        $box2=$res['bubble2'];
        $box3=$res['bubble3'];
        $box4=$res['bubble4'];
        $CStxt=$res['cross_sell'];
        $PY1=$res['pass1'];
        $PY2=$res['pass2'];
        $PY3=$res['pass3'];
        $PY4=$res['pass4'];

    }
    
    //$_SERVER["REQUEST_METHOD"] == "POST"
    if(isset($_POST['submit'])) { 
        header("location: ../../Jazz/view/jazz_view.php");
        $NewTitleD=$res['title'];
        $NewheaderTitleD=$res['heading'];
        $NewphTitleD=$res['subheading'];
        $NewphTxtD=$res['parinformationagraph_1'];
        $Newbox1=$res['bubble1'];
        $Newbox2=$res['bubble2'];
        $Newbox3=$res['bubble3'];
        $Newbox4=$res['bubble4'];
        $NewCStxt=$res['cross_sell'];
        $NewPY1=$res['pass1'];
        $NewPY2=$res['pass2'];
        $NewPY3=$res['pass3'];
        $NewPY4=$res['pass4'];
        
        $update = $controller->UpdateDataDance($NewTitleD, $NewheaderTitleD, $NewphTitleD, $NewphTxtD, $Newbox1, $Newbox2, $Newbox3, $Newbox4, $NewCStxt, $NewPY1,$NewPY2,$NewPY3,$NewPY4);
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
            <button class="dropbtn" onclick="myFunction()"><img src="../Jazz/img/shopping_cart.png"><span>Items</span></button>     

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
        <h1 id="headerEdit">Edit Dance Page </h1>
        <hr id="longLine"/>
    </section>
    <section> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Header title:</label>
                <input type="text" name="headerTitleD" value="<?php echo $headerTitleD; ?>">
            </div>
            <div class="form-group">
                <form action="/action_page.php">
                    <label>Header image:</label> 
                    <input type="file" name="picDHeader" accept="image/*">            
                </form>
            </div>
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="TitleD" value="<?php echo $TitleD; ?>">
            </div>
            <div class="form-group">
                <label>Paragraph 1 title:</label>
                <input type="text" name="phTitleD" value="<?php echo $phTitleD; ?>">
            </div>
            <div class="form-group">
                <label>Paragraph 1 subtitle:</label>
                <input type="text" name="phSubitleD" value="<?php echo $phTitleD; ?>">
            </div>
            <div class="form-group">
                <label>Paragraph 1 text:</label>
                <input type="text" name="phTxtD" value="<?php echo $phTxtD; ?>">
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
            <div class="form-group">
                <form action="/action_page.php">
                    <label>Intermediate image:</label> 
                    <input type="file" name="picD" accept="image/*">            
                </form>
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
            
            <button id="saveD" class="buttonsLila"  type="button">Save</button>
            <div class="form-group"> 
            <label>             </label>
            </div>
            <div class="form-group"> 
            <label>             </label>
            </div>
            <div class="form-group"> 
            <label>             </label>
            </div>
        </form>

    </section> 

    <div class="footer">
        
        <p class="left">All rights reserved &copy; 2019</p>            
            <img class="right" src="img/logo_H.png">
            <img class="right" src="img/facebook.png">
            <img class="right" src="img/instagram.png">
        </div>
</body>
</html>