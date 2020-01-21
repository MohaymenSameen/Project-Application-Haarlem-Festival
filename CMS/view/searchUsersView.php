<?php
    include_once('../model/searchUserModel.php');
    session_start();
    
?>
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
        <section class="secondsections">
                          
        <form method="GET" action="search_result.php">                     
			<input type="text" name="query" placeholder = "name / email / role" /><br>
			<p>*Just enter name/ email/ role (admin or super) and press the Search</p>
			
    		<input class="buttonsLila" type="submit" value="Search" />
		</form>

</section>
    </body>
</html>
    