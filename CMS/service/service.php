<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_EMAIL', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phpsite');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_EMAIL, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>