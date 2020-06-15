<?php
    require_once ('../controller/jazz_controller.php');  
    require_once ('../../ShoppingCart/shopping_cart.php');
    session_start();      
    
    //initializing jazz controller
    $JazzController = new JazzController();

    //receiving page data
    $data = $JazzController->recieveData();
    
    //initializing shopping cart
    $shoppingCart = new ShoppingCart();

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Jazz-Style.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php"><strong>Jazz</strong></a></li>
            <li><a href="../../Dance/view/dance_view.php">Dance</a></li>
            <li><a href="../../Food/view/food_view.php">Food</a></li>
            <li><a href="../CMS/login.php">Volunteer</a></li>
        </ul>
    </div>
    <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()"><img src="../img/shopping_cart.png"><span>Items</span></button>
            <div id="myDropdown" class="dropdown-content">
                <form method="POST">
                <?php
                    //if add button is clicked new ticket is made and added to shopping cart                                                        
                    if(isset($_POST['add']))
                    {   
                        //change date format to select specific ticket from database                         
                        $newDate =  date("Y-m-d", strtotime($_POST['date']));
                        
                        //getting ticket 
                        $ticket = $JazzController->recieveTicket($_POST["band"],$newDate);

                        //adding ticket to cart
                        $cart = $shoppingCart->createShoppingCart($ticket);                        
                    }                     
                    $displayCart = $shoppingCart->displayShoppingCart();

                    //if cart is not empty show checkout button
                    if(!empty($_SESSION['shopping_cart']))
                    {
                        echo("<button type='button' class='checkout' onclick=\"location.href='../../Payment/view/payment_view.php'\">Check Out</button>");
                    }
                    
                    //remove ticket from cart
                    $remove = $shoppingCart->removeFromCart();     
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
            echo '<h1>'.$heading2.'</h1>';
            $date = $JazzController->recieveDate("2020-07-26");            
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
                $timetable = $JazzController->recieveTimetables("2020-07-26");              
            ?>                           
            </tr>           
        </table>
        <br><br>
    </div>
    <div class="backcolor2">
    <div class="timetable2"> 
        <?php           
            $date2 = $JazzController->recieveDate("2020-07-27");
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
                $timetable2 = $JazzController->recieveTimetables("2020-07-27");               
            ?>                
            </tr>           
        </table>
        <br><br>
        </div>
    </div>    
    <div class="timetable3">        
        <?php      
            $date3 = $JazzController->recieveDate("2020-07-28");
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
                $timetable3 = $JazzController->recieveTimetables("2020-07-28");                
            ?>                
            </tr>            
        </table>
        <br><br>
    </div>
    <div class="backcolor4">
        <div class="timetable4">        
        <?php         
            $date4 = $JazzController->recieveDate("2020-07-29");
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
                $timetable4 = $JazzController->recieveTimetables("2020-07-29");        
            ?>                
            </tr>            
        </table>     
        <br><br>   
        </div>
    </div>    

    <div class="tickets">   
        <form method="POST" name="tick" onsubmit="return required();">        
            <?php echo '<h1>'.$heading3.'</h1>';
            echo '<h2>'.$label1.'</h2>';?>        
            <br>

            <select class="date" name="date" > 
                <option>Select Date</option>                              
                <?php echo '<option value="'.$date.'">'.$date.'</option>';?>
                <?php echo '<option value="'.$date2.'">'.$date2.'</option>';?>
                <?php echo '<option value="'.$date3.'">'.$date3.'</option>';?>
                <?php echo '<option value="'.$date4.'">'.$date4.'</option>';?>                         
            </select>
        
            <select class="band" name="band">                       
            </select>        

            <div class="quantity">
                <?php echo '<h3>'.$label2.'</h3>';?>         
                <input type="number" id="quantity" name=quantity min="1" max="200" value="1"/>  
            </div>  
            
            <div class="addcart">
                <input type="hidden" name="add" value="add"/>
                <button type="submit" class="addcart"><span>Add To Cart</span></button>
            </div>
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
            echo '<h2>'."&bull;",$label4.'</h2>';
            echo '<h2>'."&bull;",$label5.'</h2>';        
            echo '<h3>'.$label6.'</h3>';                     
        ?>        
        <select class="pass_type" name="band">
            <?php echo '<option value="Access Pass 1 Day">'.$label4.'</option>';?>
            <?php echo '<option value="Access Pass 3 Days">'.$label5.'</option>';?>            
        </select>
        <br>
        <select class="date" name="date" hidden>
            <?php echo '<option value="Thursday, 30 July">'."July 26th, July 27th & July 28th".'</option>';?>
        </select>
        <?php echo '<h3>'.$label7.'</h3>';?>
        <input type="number" id="quantity_pass" name=quantity min="1" max="200" value="1"/>  
        <br> 
        <div class="addcart">
                <input type="hidden" name="add" value="add"/>
                <button type="submit" class="addcart"><span>Add To Cart</span></button>
        </div>
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
    
    <script>
    $(document).ready(function(){
        $('.date').change(function(){
            var date = $(this).val();                 
            $.ajax({
                url:"fetch_band.php",
                method:"POST",
                data:{date,date},
                dataType:"text",
                success:function(data)
                {
                    $('.band').html(data);
                }                
            });        
        });
    });   
    </script>  
    <script src="../js/script.js">
    </script>   
</body>
</html>
