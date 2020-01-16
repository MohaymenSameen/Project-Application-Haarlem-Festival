<?php
    require_once ('../controller/jazz_controller.php');   
    
   /* $title = null;
    $heading1=null;
    $heading2=null;
    $heading3=null;
    $heading4=null;
    $heading5=null;
    $label1=null;
    $label2=null;
    $label3=null;
    $label4=null;
    $label5=null;
    $label6=null;
    $label7=null;
    $paragraph1=null;
    $date1=null;
    $date2=null;
    $date3=null;
    $date4=null; 
                */

    $JazzController = new JazzController();
    $data = $JazzController->recieveData();
    $timetable1 = $JazzController->recieveTimetable1();
    $timetable2 = $JazzController->recieveTimetable2();
    $timetable3 = $JazzController->recieveTimetable3();
    $timetable4 = $JazzController->recieveTimetable4();

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

    // Close the dropdown if the user clicks outside of it
   /* window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }*/

    </script>
    <div class="navbar">
        <ul>
            <li><a href="../../Home/view/home_view.php">Home</a></li>
            <li><a href="jazz_view.php"><strong>Jazz</strong></a></li>
            <li><a href="Dance.html">Dance</a></li>
            <li><a href="Food.html">Food</a></li>
            <li><a href="../CMS/admin.php">Volunteer</a></li>

           
           <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()"><img src="../img/shopping_cart.png"><span>Items</span></button>     

            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
            </div>
        </ul>
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
                    .$res['price']."</td></tr>";
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
                    .$res['price']."</td></tr>";
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
                    .$res['price']."</td></tr>";
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
        <?php echo '<h1>'.$heading3.'</h1>';
        echo '<h2>'.$label1.'</h2>';?>        
        <br>

        <select class="date">
           <!-- <option value="Thursday, 26th July">Thursday, 26th July</option>
            <option value="Friday, 27th July">Friday, 27th July</option>
            <option value="Saturday, 28th July">Saturday, 28th July</option>
            <option value="Sunday, 29th July">Sunday, 29th July</option>!-->
             <?php
            
            foreach($timetable1 as $res)
            {                     
            echo '<option value="thursday">'.$res['date'].'</option>';
            break;
            }
            foreach($timetable2 as $res)
            {                     
            echo '<option value="friday">'.$res['date'].'</option>';
            break;
            }
            foreach($timetable3 as $res)
            {                     
            echo '<option value="saturday">'.$res['date'].'</option>';
            break;
            }
            foreach($timetable4 as $res)
            {                     
            echo '<option value="sunday">'.$res['date'].'</option>';
            break;
            }
     
            ?>
        </select>

        <select class="band">
            <!--<option value="Gumbo Kings">Gumbo Kings</option>
            <option value="Evolve">Evolve</option>
            <option value="Ntjam Rosie">Ntjam Rosie</option>
            <option value="Wicked Jazz Sounds">Wicked Jazz Sounds</option>
            <option value="Tom Thomsom Assemble">Tom Thomsom Assemble</option>
            <option value="Jonna Frazer">Jonna Frazer</option>!-->
            <?php
            
            
                foreach($timetable1 as $res)
                {                     
                echo '<option value="thursday">'.$res['band'].'</option>';
                }
                foreach($timetable2 as $res)
                {                     
                echo '<option value="thursday">'.$res['band'].'</option>';
                }
                foreach($timetable3 as $res)
                {                     
                echo '<option value="thursday">'.$res['band'].'</option>';
                }                    
            ?>
        </select>        

        <?php echo '<h3>'.$label2.'</h3>';?>       

        <select class="quantity">
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
        <button type="button" class="addcart"><span>Add To Cart</span></button>
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
        <?php echo '<h1>'.$heading5.'</h1>';
            echo '<h2>'.$label4.'</h2>';
            echo '<h2>'.$label5.'</h2>';        
            echo '<h3>'.$label6.'</h3>';?>
        
        <select class="pass_type">
            <option value="All Access Pass (One Day)">All Access Pass (One Day)</option>
            <option value="All Access Pass (Thursday, Friday, Sunday)">All Access Pass (Thursday, Friday, Sunday)</option>   
        </select>
        <br>
        <?php echo '<h3>'.$label7.'</h3>';?>
        <select class="quantity">
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
        <button type="button" class="addcart"><span>Add To Cart</span></button>
        <br><br>
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