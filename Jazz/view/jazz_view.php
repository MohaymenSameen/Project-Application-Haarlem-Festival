<?php
    require_once ('../controller/jazz_controller.php');   
    
    $title = null;
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

    $JazzController = new JazzController();
    $row = $JazzController->recieveData();
    if(is_array($row))
    {
        foreach($row as $res)
        {
            $title=$res['title'];
            $heading1=$res['heading_1'];
            $heading2=$res['heading_2']; 
        }
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
    <ul>
        <li><a href="Home.html">Home</a></li>
        <li><a href="Jazz.html"><strong>Jazz</strong></a></li>
        <li><a href="Dance.html">Dance</a></li>
        <li><a href="Food.html">Food</a></li>
        <li><a href="../CMS/admin.php">Volunteer</a></li>        
    </ul>

    <div class="header">
        <img src="../img/header.jpg">
        <?php echo '<p>'.$title.'</p>';?>
    </div>

    <div class="information">
        <?php echo '<h1>'.$heading1.'</h1>';?>        
        <p>The Haarlem Jazz Festival showcases the greatest jazz artists from the Netherlands. The Haarlem Jazz Festival is 4 days long, from the 26th of July till the 29th. Well known bands such as the Gumbo Kings, Evolve, Wicked Jazz Sounds and 16 other bands will be performing! You can buy seperate tickets or purchase access passes to see each and every band!</p>
    </div>
    
    <div class="picture2">
        <img src="../img/location.jpg">
    </div>

    <div class="timetable1">
        <h1>Program Dates</h1>
        <h2>July 26th, Thursday</h2>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Gumbo Kings</td>
                <td>€15</td>                
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Evolve</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Ntjam Rosie</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Wicked Jazz Sounds</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Tom Thomsom Assemble</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Jonna Frazer</td>
                <td>€10</td>
            </tr>
        </table>
        <br><br>
    </div>
    <div class="backcolor2">
    <div class="timetable2">        
        <h2>July 27th, Friday</h2>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Gumbo Kings</td>
                <td>€15</td>                
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Evolve</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Ntjam Rosie</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Wicked Jazz Sounds</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Tom Thomsom Assemble</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Jonna Frazer</td>
                <td>€10</td>
            </tr>
        </table>
        <br><br>
        </div>
    </div>    
    <div class="timetable3">        
        <h2>July 28th, Saturday</h2>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Gumbo Kings</td>
                <td>€15</td>                
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Evolve</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Ntjam Rosie</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Wicked Jazz Sounds</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Tom Thomsom Assemble</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Jonna Frazer</td>
                <td>€10</td>
            </tr>
        </table>
        <br><br>
    </div>
    <div class="backcolor4">
        <div class="timetable4">        
        <h2>July 29th, Sunday</h2>
        <table>
            <tr>
                <th>Location</th>
                <th>Timing</th>
                <th>Band</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Gumbo Kings</td>
                <td>€15</td>                
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Evolve</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Main Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Ntjam Rosie</td>
                <td>€15</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>18:00-19:00</td>
                <td>Wicked Jazz Sounds</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>19:30-20:30</td>
                <td>Tom Thomsom Assemble</td>
                <td>€10</td>
            </tr>
            <tr>
                <td>Second Hall, Patronaat</td>
                <td>21:00-22:00</td>
                <td>Jonna Frazer</td>
                <td>€10</td>
            </tr>
        </table>     
        <br><br>   
        </div>
    </div>
    
    <div class="tickets">
        <h1>Tickets</h1>
        <h2>Select Band & Date</h2>
        <br>
        <select class="band">
            <option value="Gumbo Kings">Gumbo Kings</option>
            <option value="Evolve">Evolve</option>
            <option value="Ntjam Rosie">Ntjam Rosie</option>
            <option value="Wicked Jazz Sounds">Wicked Jazz Sounds</option>
            <option value="Tom Thomsom Assemble">Tom Thomsom Assemble</option>
            <option value="Jonna Frazer">Jonna Frazer</option>
        </select>

        <select class="date">
            <option value="Thursday, 26th July">Thursday, 26th July</option>
            <option value="Friday, 27th July">Friday, 27th July</option>
            <option value="Saturday, 28th July">Saturday, 28th July</option>
            <option value="Sunday, 29th July">Sunday, 29th July</option>
        </select>

        <h3>Quantity:</h3>

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
        <h1>Add More To The Fun!</h1>
        <h2>By clicking one of the options</h2>
        <img src="../img/food.png">       
        <img src="../img/Dance.png">    
        <br>
        <button type="button" class="cross"><span>Food</span></button>
        <button type="button" class="cross"><span>Dance</span></button>          
    </div>      

    <div class="access_passes">
        <h1>Access Passes</h1>
        <h2>•All Access Pass <strong>One Day: €35</strong></h2>
        <h2>•All Access Pass <strong>(Thursday, Friday, Saturday): €80</strong></h2></h2>
        
        <h3>Access Pass:</h3>
        <select class="pass_type">
            <option value="All Access Pass (One Day)">All Access Pass (One Day)</option>
            <option value="All Access Pass (Thursday, Friday, Sunday)">All Access Pass (Thursday, Friday, Sunday)</option>   
        </select>
        <br>
        <h3>Quantity:</h3>
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

</body>
</html>