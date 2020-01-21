<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-searchUsers.css" rel="stylesheet" type="text/css">
    </head>
    <body>    
        <section class="section">
            <h1><img src="img/searchUsersicon.png" alt="icon search users"> Search Users</h1>
            <hr id="longLine"/>
        </section>
<?php
include_once('../model/searchUserModel.php');
$user= new SearchUserModel();
$query = $_GET['query'];  // gets value sent over search form                    
$query = htmlspecialchars($query); //change special chars to html format                    
$raw_results = $user->search($query); //use the user search function to get result from database
        
    if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned
    
        echo "<h3> RESULTS: </h3>"; //basic header so that users know they're looking at the results
        while($results = mysqli_fetch_array($raw_results))
        {
            //output results
            echo "<p><h4><br> Name: ".$results['name']."</h4></p>";
            echo "<p><h4><br> Email: ".$results['email']."</h4></p>";
            echo "<p><h4><br> Role: ".$results['role']."</h4></p>";
            echo "<p><h4><br> Phone: ".$results['phone']."</h4></p>";
        }
        
    }
    else{ // if there is no matching records
        echo "<br><br> No results <br><br>";
    }
?>
</body>
</html>
