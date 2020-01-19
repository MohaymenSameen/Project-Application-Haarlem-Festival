<?php
    require_once ('../controller/home_controller.php');

    $HomeController = new HomeController();
    $countdown = $HomeController->recieveCountdown();
        foreach($countdown as $res)
        {
            $date=$res['date'];
            $h=$res['h'];
            $m=$res['m'];
            $s=$res['s'];
        }    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <script>
        var countDownDate = <?php echo strtotime("$date $h:$m:$s" ) ?> * 1000;
        var now = <?php echo time() ?> * 1000;

        // Update the count down every 1 second
        var x = setInterval(function()
        {
        now = now + 1000;
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Output the result in an element with id="demo"
        document.getElementById("time").innerHTML = days +" : "+hours+" : "+minutes +" : "+seconds;
        document.getElementById("text").innerHTML = "Days " + "Hours " + "Minutes " + "Seconds ";
        document.getElementById("text").style.wordSpacing = "50px";
        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("time").innerHTML = "EXPIRED";
        }
            
        }, 1000);        
    </script>
    
        <div class="navbar">
            <ul>
                <li><a href="../../Home/Home.html"><strong>Home</strong></a></li>
                <li><a href="../../Jazz/view/jazz_view.php">Jazz</a></li>
                <li><a href="Dance.html">Dance</a></li>
                <li><a href="Food.html">Food</a></li>
                <li><a href="../CMS/admin.php">Volunteer</a></li>         
            </ul>
        </div>        
            <h1>Haarlem Festival</h1>
            <img src="../img/banner.jpeg">
        
       
        <div class="countdown">
            <h2 id="time"></h2>
            <h2 id="text"></h2>
        </div>
        
        
           <!-- <ul class="secondary">
                <li><a>EN</a></li>
                <li><a>|</a></li>
                <li><a>NL</a></li>
            </ul>
            <div id="logo_square">
                    <div id="logo_div" class=""></div>
                  </div>
            <div id="logo">
                    <img id="logo_img" class="img " src="img/logo.png"/>
                  </div>
            !-->

       

        <div class="footer">
            
            <p class="left">All rights reserved &copy; 2019</p>            
            <img class="right" src="../img/facebook.png">
            <img class="right" src="../img/instagram.png">
            <img class="right" src="../img/youtube.png">
            <img class="right" src="../img/logo_H.png">
        </div>
    </body>
</html>