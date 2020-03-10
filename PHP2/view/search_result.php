<?php
    session_start();
    include_once '../model/class.user.php';
    $user = new User(); $uid = $_SESSION['uid'];

    //check if user is logged in
    if (!$user->get_session()){
     header("location:login.php");
    }
    
    //log out user
    if (isset($_GET['q'])){
     $user->user_logout();
     header("location:login.php");
     }
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container"> 
	  <!-- Navigation -->
	  <header> <a href="home.php">
		<h4 class="logo">DAWGS</h4>
	  </a>
		<nav>
		  <ul>
			<li><a href="home.php">HOME</a></li>
      <li><a href="Search.php">SEARCH</a></li>
			<li><a href="edit.php">EDIT PROFILE</a></li>
			<li><a href="login.php">LOG IN</a></li>
		  </ul>
		</nav>
		<p>Hello, <?php $user->get_fullname($uid); ?>!</p>
	  </header>

        <?php
            
            $query = $_GET['query'];  // gets value sent over search form
                
                $query = htmlspecialchars($query); //change special chars to html format
                
                $raw_results = $user->search($query); //use the user search function to get result from database
                
                if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned
                
                    echo "<h3> RESULTS: </h3>"; //basic header so that users know they're looking at the results
                    while($results = mysqli_fetch_array($raw_results))
                    {
                        //output results
                        echo "<p><h4><br> Name: ".$results['name']."</h2>"."email: ".$results['email']."<br>registration date: ".$results['reg_date']."</p>";

                    }
                    
                }
                else{ // if there is no matching records
                    echo "<br><br> No results <br><br>";
                }
                
        ?>

    <div class="copyright">&copy;2019 - <strong>DAWG (by Martin Aranguelov)</strong></div>
    </div>
</body>
</html>