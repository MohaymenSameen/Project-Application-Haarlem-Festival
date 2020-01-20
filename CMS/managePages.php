<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-managePages.css" rel="stylesheet" type="text/css">
    </head>
    <body>    
        <section class="section">
            <h1><img src="img/managePages.png" alt="icon manage pages"> Manage Pages</h1>
            <hr id="longLine"/>

            <h2 id ="nxt">Current pages</h2>
            <hr id = "firstSL" class="shortLine"/>
            <h2 id = "nxt2">Create a new page</h2>
            <hr id = "secondSL" class="shortLine"/>

            <ul class="pagesList">
                <li>Jazz</a></li>
                <!--<button><a href="./jazz" ><a href="./jazz" ></button>-->
                <li>Dance</a></li>
                <li>Home</a></li>
            </ul>

            <div class="editNLButtons">
                <a href="editJazzNL.php">Edit NL</a>               
            </div>
            <div class="editNLButtons">
                <a href="editDanceNL.php">Edit NL</a>               
            </div>
            <div class="editNLButtons">
                <a href="editHomeNL.php">Edit NL</a>
            </div>

            <div class="editENButtons">
                <a href="/view/editJazzEN.php">Edit EN</a>               
            </div>
            <div class="editENButtons">
                <a href="editDanceEN.php">Edit EN</a>               
            </div>
            <div class="editENButtons">
                <a href="editHomeEN.php">Edit EN</a>
            </div>
            

            <ul class="removePage">
                <li><input type="submit" id="JazzR" value="Remove"></li>
                <li><input type="submit" id="DanceR" value="Remove"></li>
                <li><input type="submit" id="HomeR" value="Remove"></li>
            </ul>
             
            <input type="submit" id="createNewPage" value="+ ">


        </section>
    </body>
</html>
    