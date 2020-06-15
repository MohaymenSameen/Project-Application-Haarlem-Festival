<?php
    require_once ('../../dbconnection/dbconnection.php');
    $db = new Database();
    $newDate =  date("Y-m-d", strtotime($_POST["date"]));
    $sql = "SELECT band FROM jazz_timetable WHERE date = '".$newDate."' GROUP BY band";
    $result = $db->connect()->query($sql);    
    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '<option value="'.$row["band"].'">'.$row["band"].'</option>';
    } 
    echo $output;
?>