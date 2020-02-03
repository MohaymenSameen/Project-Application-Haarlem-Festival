<html>
  <head>
  <title>Users</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-control" content="no-cache"/>
  </head>

  <body>

    <div class="jumbotron  jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Users</h1>
        <p>Model-View-Controller-Service pattern for users</p>
      </div>
    </div>

    <form method="post" action="controller/UserController.php">
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="First name" name="first_name" required autofocus>
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="age" name="age">
        </div>
        <button type="submit" class="btn btn-secondary">Add</button>
    </div>
    </form>


    <table id="example" class="table table-hover" style="width:100%">
    
    <thead>
      <tr>
        <th>ID</th>    
        <th>Name</th>
        <th>Age</th>
        <th>
      </tr>
    </thead>
    
    <tbody>

<?php

include ('model/user.php');

include ('controller/UserController.php');


    $result = getAllUsers();
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
       
            echo "<tr>";
            
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>";
            echo "<form method=\"delete\" action=\"controller/UserController.php?id=" 
            . $row['id'] 
            . "\">";
            echo "<button type=\"submit\" class=\"btn btn-secondary\">Delete</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
            
        }
    }

    echo "</tbody>";
    echo "</table>";

?>

</body>
</html>

