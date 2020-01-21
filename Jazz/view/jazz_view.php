<?php
    require_once ('../controller/jazz_controller.php');  
    session_start();          
    //initializing jazz controller
    $JazzController = new JazzController();
    $data = $JazzController->recieveData();
    $timetable1 = $JazzController->recieveTimetable1();
    $timetable2 = $JazzController->recieveTimetable2();
    $timetable3 = $JazzController->recieveTimetable3();
    $timetable4 = $JazzController->recieveTimetable4();
    
    //making variables for seperate data headings
    foreach($data as $res)
    {
        $title=$res['title'];
        $heading1=$res['heading_1'];
        $heading2=$res['heading_2']; 
        $heading3=$res['heading_3'];
        $heading4=$res['heading_4'];
        $heading5=$res['heading_5'];
        $label1=$res['label_1'];
        $label2=$res['label_2'];
        $label3=$res['label_3'];
        $label4=$res['label_4'];
        $label5=$res['label_5'];
        $label6=$res['label_6'];
        $label7=$res['label_7'];
        $paragraph1=$res['paragraph_1'];
    }
    if(isset($_POST["add"]))
    {
        $_SESSION['date']=$_POST['date'];
        $_SESSION['band']=$_POST['band'];
        $_SESSION['quan']=$_POST['quantity'];         
    }
    if(isset($_POST["adda"]))
    {
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['quant'] = $_POST['quant'];
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Jazz-Style.css" type="text/css" rel="stylesheet"/>
    <title>Jazz</title>
</head>
<body>    
    <script>
            /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction()
    {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    </script>
    <div class="navbar">
        <ul>
            <!--<li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php"><strong>Jazz</strong></a></li>
            <li><a href="Dance.html">Dance</a></li>
            <li><a href="Food.html">Food</a></li>
            <li><a href="../CMS/admin.php">Volunteer</a></li>-->
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php"><strong>Jazz</strong></a></li>
            <li><a href="../../Dance/view/dance_view.php">Dance</a></li>
            <li><a href="../../Food/Food.html">Food</a></li>
            <li><a href="../CMS/login.php">Volunteer</a></li>
        </ul>
    </div>
    <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()"><img src="../img/shopping_cart.png"><span>Items</span></button>     

            <div id="myDropdown" class="dropdown-content">
                <form method="POST">
                <?php
                    if(empty($_SESSION['band']) && empty($_SESSION['pass']))
                    {
                        echo '<h2 id="empty">Shopping Cart Empty</h2>';
                    }
                    if(isset($_SESSION['band']))
                    {
                        echo '<h2 id="recent">Recently Added Items</h2>';
                        echo '<h2 id="band">'.$_SESSION['band']," (",$_SESSION['date'],") ".'</h2>';                        
                        $price = $JazzController->recievePrice($_SESSION['band'], $_SESSION['date']);
                        $_SESSION['price']=$price;
                       
                        if($_SESSION['quan'] != 1)
                        {
                            if($price == "Free")
                            {
                                echo '<h2 id="quantity">'.$_SESSION['quan'],"x   ",$price.'</h2>';
                            }
                            else
                            {
                                $newPrice = $_SESSION['quan'] * $price;
                                echo '<h2 id="quantity">'.$_SESSION['quan'],"x   &euro;",$newPrice.'</h2>';
                            }                                                       
                        }
                        else
                        {
                            if($price == "Free")
                            {
                                echo '<h2 id="quantity">'.$_SESSION['quan'],"x   ",$price.'</h2>';

                            }
                            else
                            {
                                echo '<h2 id="quantity">'.$_SESSION['quan'],"x   &euro;",$price.'</h2>';
                            }
                        }
                        echo '<input type="hidden" name="delete" value="add"/>';
                        echo '<button type="submit" class="delete">X</button>';

                        echo("<button type='button' class='checkout' onclick=\"location.href='../../Payment/view/payment_view.php'\">Check Out</button>");
                    }                                        
                    if(isset($_SESSION['pass']) && $_SESSION['pass']== "All Access Pass (One Day)")
                    {
                        echo '<h2 id="recent">Recently Added Items</h2>';
                        echo '<h2 id="band">'.$_SESSION['pass'].'</h2>'; 
                        $_SESSION['accprice']=35;
                        echo '<h2 id="quantity">'.$_SESSION['quant'],"x &euro;",$_SESSION['accprice'].'</h2>'; 
                        echo '<input type="hidden" name="delete" value="add"/>';
                        echo '<button type="submit" class="delete">X</button>';
                        echo("<button type='button' class='checkout' onclick=\"location.href='../../Payment/view/payment_view.php'\">Check Out</button>");
                    } 
                    else if(isset($_SESSION['pass']) && $_SESSION['pass']== "All Access Pass (Thursday, Friday, Sunday)")
                    {
                        echo '<h2 id="recent">Recently Added Items</h2>';
                        echo '<h2 id="band">'.$_SESSION['pass'].'</h2>'; 
                        $_SESSION['accprice']=80;
                        echo '<h2 id="quantity">'.$_SESSION['quant'],"x &euro;",$_SESSION['accprice'].'</h2>'; 
                        echo '<input type="hidden" name="delete" value="add"/>';
                        echo '<button type="submit" class="delete">X</button>';         
                        echo("<button type='button' class='checkout' onclick=\"location.href='../../Payment/view/payment_view.php'\">Check Out</button>");              
                    }                   
                    if(isset($_POST['delete']))
                    {
                        session_destroy();
                        header("Location: jazz_view.php");
                    }                    
                ?>    
                </form>
            </div>
            
    </div>
    <div class="header">
        <img src="../img/header.jpg">
        <?php echo '<p>'.$title.'</p>';?>
    </div>

    <div class="information">
        <?php echo '<h1>'.$heading1.'</h1>';      
             echo '<p>'.$paragraph1.'</p>'?>
    </div>
    
    <div class="picture2">
        <img src="../img/location.jpg">
    </div>

    <div class="timetable1">
        <?php         
            foreach($timetable1 as $res)
            {
                $date1=$res['date'];
            }        
            echo '<h1>'.$heading2.'</h1>';
            echo '<h2>'.$date1.'</h2>';
        ?>        
        <table>            
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable1 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['location']."</td><td>"
                    .$res['timing']."</td><td>"
                    .$res['band']."</td><td>"
                    ,"&euro;".$res['price']."</td></tr>";
                }                     
            ?>                           
            </tr>           
        </table>
        <br><br>
    </div>
    <div class="backcolor2">
    <div class="timetable2"> 
        <?php         
            foreach($timetable2 as $res)
            {
                $date2=$res['date'];
            }    
            echo '<h2>'.$date2.'</h2>';
        ?>
        
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable2 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['location']."</td><td>"
                    .$res['timing']."</td><td>"
                    .$res['band']."</td><td>"
                    ,"&euro;".$res['price']."</td></tr>";
                }                     
            ?>                
            </tr>           
        </table>
        <br><br>
        </div>
    </div>    
    <div class="timetable3">        
        <?php         
            foreach($timetable3 as $res)
            {
                $date3=$res['date'];
            }    
            echo '<h2>'.$date3.'</h2>';
        ?>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable3 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['location']."</td><td>"
                    .$res['timing']."</td><td>"
                    .$res['band']."</td><td>"
                    ,"&euro;".$res['price']."</td></tr>";
                }                     
            ?>                
            </tr>            
        </table>
        <br><br>
    </div>
    <div class="backcolor4">
        <div class="timetable4">        
        <?php         
            foreach($timetable4 as $res)
            {
                $date4=$res['date'];
            }    
            echo '<h2>'.$date4.'</h2>';
        ?>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable4 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['location']."</td><td>"
                    .$res['timing']."</td><td>"
                    .$res['band']."</td><td>"
                    .$res['price']."</td></tr>";
                }                     
            ?>                
            </tr>            
        </table>     
        <br><br>   
        </div>
    </div>    

    <div class="tickets">   
        <form method="POST">        
        <?php echo '<h1>'.$heading3.'</h1>';
        echo '<h2>'.$label1.'</h2>';?>        
        <br>

        <select class="date" name="date">
            <?php            
            foreach($timetable1 as $res)
            {                     
            echo '<option>'.$res['date'].'</option>';
            break;
            }
            foreach($timetable2 as $res)
            {                     
            echo '<option>'.$res['date'].'</option>';
            break;
            }
            foreach($timetable3 as $res)
            {                     
            echo '<option>'.$res['date'].'</option>';
            break;
            }
            foreach($timetable4 as $res)
            {                     
            echo '<option>'.$res['date'].'</option>';
            break;
            }
     
            ?>
        </select>

        <select class="band" name="band">
            <?php            
                foreach($timetable1 as $res)
                {                     
                    echo '<option>'.$res['band'].'</option>';                   
                }
                foreach($timetable2 as $res)
                {                     
                    echo '<option>'.$res['band'].'</option>';                    
                }
                foreach($timetable3 as $res)
                {                     
                    echo '<option>'.$res['band'].'</option>';                    
                }                                  
            ?>
        </select>        
        
        <?php echo '<h3>'.$label2.'</h3>';?>       

        <select class="quantity" name="quantity">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>            
        </select>
        <br>                 
            <input type="hidden" name="add" value="add"/>
            <button type="submit" class="addcart"><span>Add To Cart</span></button>
        </form>
    </div>
    

    <div class="cross_selling">
        <?php echo '<h1>'.$heading4.'</h1>';
            echo '<h2>'.$label3.'</h2>';?>        
        <img src="../img/food.png">       
        <img src="../img/Dance.png">    
        <br>
        <button type="button" class="cross"><span>Food</span></button>
        <button type="button" class="cross"><span>Dance</span></button>          
    </div>      

    <div class="access_passes">
        <form method="POST">
        <?php echo '<h1>'.$heading5.'</h1>';
            echo '<h2>'.$label4.'</h2>';
            echo '<h2>'.$label5.'</h2>';        
            echo '<h3>'.$label6.'</h3>';                     
        ?>
        
        <select class="pass_type" name=pass>
            <option value="All Access Pass (One Day)">All Access Pass (One Day)</option>
            <option value="All Access Pass (Thursday, Friday, Sunday)">All Access Pass (Thursday, Friday, Sunday)</option>   
        </select>
        <br>
        <?php echo '<h3>'.$label7.'</h3>';?>
        <select class="quantity" name=quant>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>   
        </select>  
        <br> 
        <input type="hidden" name="adda" value="adda"/>
        <button type="submit" class="addcart"><span>Add To Cart</span></button>
        <br><br>
        </form>
    </div>
    <div class="footer">
        
        <p class="left">All rights reserved &copy; 2019</p>            
        <img class="right" src="../../Home/img/facebook.png">
        <img class="right" src="../../Home/img/instagram.png">
        <img class="right" src="../../Home/img/youtube.png">
        <img class="right" src="../../Home/img/logo_H.png">
    </div>
</body>
</html>