<?php
    require_once ('../controller/dance_controller.php');  

    //Create a session, if one is not already present
    if(!isset($_SESSION)){
        session_start();
    }
    
    //new controller module
    $DanceController = new DanceController();
    //retrieve text data
    $pageData = $DanceController->recieveData();
    //retrieve timetables
    $timetable1 = $DanceController->recieveTimetable("July 27th, Friday");
    $timetable2 = $DanceController->recieveTimetable("July 28th, Saturday");
    $timetable3 = $DanceController->recieveTimetable("July 29th, Sunday");

    //store data from database in variables
    foreach($pageData as $res)
    {
        $title=$res['title'];
        $heading=$res['heading'];
        $subheading=$res['subheading']; 
        $information=$res['information'];
        $bubble1=$res['bubble1'];
        $bubble2=$res['bubble2'];
        $bubble3=$res['bubble3'];
        $bubble4=$res['bubble4'];
        $cross_sell=$res['cross_sell'];
        $pass1=$res['pass1'];
        $pass2=$res['pass2'];
        $pass3=$res['pass3'];
        $pass4=$res['pass4'];
    }
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/dance.css" type="text/css" rel="stylesheet"/>
    <title>Dance</title>
</head>
<body>    


    <script>
    //shopping cart function
    function myFunction()
    {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    </script>
    <div class="navbar">
        <ul>
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="../../Jazz/view/jazz_view.php">Jazz</a></li>
            <li><a href="dance_view.php"><strong>Dance</strong></a></li>
            <li><a href="../../Food/view/food_view.php">Food</a></li>
            <li><a href="../../CMS/admin.php">Volunteer</a></li>
            </ul>
    </div>
           
    <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()"><img src="../img/shopping_cart.png"><span>Items</span></button>     

        <div id="myDropdown" class="dropdown-content">
            <form method="POST">
            <?php
                //dispay cart contents after button clicked
                $DanceController->DisplayCart();
                
                //display check out button
                echo("<button type='button' class='checkout' onclick=\"location.href='../../Payment/view/payment_view.php'\">Check Out</button>");  

                //remove item from cart if button is pressed
                $DanceController->removeFromCart();                 
            ?>    
            </form>
        </div>
    </div>


    <div class="header">
        <img src="../img/header.png">
        <?php echo '<p>'.$title.'</p>';?>
    </div>
    <!-- link to tickets pane -->
    <button id="ticketButton" type="button"><a href="#tickets">Tickets</a></button>

    <div class="information">
        <?php echo '<h1>'.$heading.'</h1>';      
             echo '<h2>'.$subheading.'</h2>';
             echo '<p>'.$information.'</p>';
             echo '<p class="bubbles" id="bubble1">'.$bubble1.'</p>';
             echo '<p class="bubbles" id="bubble2">'.$bubble2.'</p>';
             echo '<p class="bubbles" id="bubble3">'.$bubble3.'</p>';
             echo '<p class="bubbles" id="bubble4">'.$bubble4.'</p>';?>
             <p id="disclaimer">*The capacity of some venues is limited and availability for all holders cannot be guaranteed.</p>
    </div>

    <!----------------------------------------------- TIMETABLES ---------------------------------------------->
    <div class="backcolor1">
    <div class="timetable1">
        <?php         
            foreach($timetable1 as $res)
            {
                $date1=$res['date'];
            }
            echo '<h2>'.$date1.'</h2>';
        ?>        
        <table>            
            <tr>
                <th>DJ</th>
                <th>Time</th>
                <th>Location</th>
                <th>Price</th>
                <th>Session</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable1 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['dj']."</td><td>"
                    .$res['time']."</td><td>"
                    .$res['location']."</td><td>&euro;"
                    .$res['price']."</td><td>"
                    .$res['session']."</td></tr>";
                }                     
            ?>                           
            </tr>           
        </table>
        <br>
        <button id="ticketButton2" type="button"><a href="#tickets">Tickets</a></button>
        </div>
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
                <th>DJ</th>
                <th>Time</th>
                <th>Location</th>
                <th>Price</th>
                <th>Session</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable2 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['dj']."</td><td>"
                    .$res['time']."</td><td>"
                    .$res['location']."</td><td>&euro;"
                    .$res['price']."</td><td>"
                    .$res['session']."</td></tr>";
                }                     
            ?>                
            </tr>           
        </table>
        <br>
        <button id="ticketButton2" type="button"><a href="#tickets">Tickets</a></button>
        </div>
    </div>   
    <div class="backcolor1">
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
                <th>DJ</th>
                <th>Time</th>
                <th>Location</th>
                <th>Price</th>
                <th>Session</th>
            </tr>
            <tr>
            <?php        
                foreach($timetable3 as $res)
                {                     
                    echo "<tr><td>"
                    .$res['dj']."</td><td>"
                    .$res['time']."</td><td>"
                    .$res['location']."</td><td>&euro;"
                    .$res['price']."</td><td>"
                    .$res['session']."</td></tr>";
                }                     
            ?>                
            </tr>            
        </table>
        <br>
        <button id="ticketButton2" type="button"><a href="#tickets">Tickets</a></button>
    </div>   
    </div>

    <!---------------------------------- TICKETS --------------------------------->
    <div class="tickets" id="tickets">   
        <form method="POST" action="../controller/dance_controller.php">        
        <h1> Tickets </h1>
        <h2> Select date: </h2>      
        <br>
        <!-- display different dates -->
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
            ?>
        </select>

        <h2 id="dj"> Select event: </h2> 

        <select class="dj" id="dj" name="dj">
            <?php            

            //merge all timetables' performances into one and output
            $timetables = array_merge($timetable1, $timetable2, $timetable3);
                foreach($timetables as $res)
                {                     
                    echo '<option>'.$res['dj'].'</option>';                   
                }                                 
            ?>
        </select>  

        <!-- remove duplicate dropdown entries -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
        var code = {};
        $("select[name='dj'] > option").each(function () {
            if(code[this.text]) {
                $(this).remove();
            } else {
                code[this.text] = this.value;
            }
        });
        </script>
        
        <h3> Quantity: </h3>
        <input type="number" class="quantity" name="quantity" min=1 max=50 value=1>
        <br>                 
            <button type="submit" class="addcart" name="ticket"><span>Add To Cart</span></button>
        </form>
    </div>
    

    <div class="cross_selling">
        <?php echo '<h1>'.$cross_sell.'</h1>';?>        
        <img src="../img/jazz.png">       
        <img src="../img/food.png">    
        <br>
        <button type="button" class="cross" a href="../../Jazz/view/jazz_view.php"><span>Jazz</span></button>
        <button type="button" class="cross" a href="../../Food/view/food_view.php"><span>Food</span></button>          
    </div>      

    <!----------------------------------------- ACCESS PASSES ------------------------------------------>

    <div class="access_passes">
        <form method="POST" action="../controller/dance_controller.php">
        <h1>Access Passes</h1>
        <?php
            echo '<h2>'.$pass1.'</h2>';
            echo '<h2>'.$pass2.'</h2>';        
            echo '<h2>'.$pass3.'</h2>';
            echo '<h2>'.$pass4.'</h2>';                     
        ?>

        <h3 class="pass"> Select pass: </h3>
        
        <select class="pass_type" name="pass">
            <option><?php echo $pass1?></option>
            <option><?php echo $pass2?></option>
            <option><?php echo $pass3?></option>
            <option><?php echo $pass4?></option>   
        </select>
        <br>
        <h3>Quantity:</h3>
        <input type="number" class="quantity" name="quantity" min=1 max=100 value=1>
        <br>
        <button type="submit" class="addcart" name="access_pass"><span>Add To Cart</span></button>
        <br><br>
        </form>
    </div>

    <div class="footer">
        <p class="left">All rights reserved &copy; 2020</p>            
        <img class="right" src="../../Home/img/facebook.png">
        <img class="right" src="../../Home/img/instagram.png">
        <img class="right" src="../../Home/img/youtube.png">
        <img class="right" src="../../Home/img/logo_H.png">
    </div>
</body>
</html>