<?php
    require_once ('../../dbconnection/dbconnection.php');
    class HomeModel extends Database
    {
        public function getCountdown()
        {
            $sql="SELECT * FROM home_countdown";
            $result = $this->connect()->query($sql);              
            $row = $result->fetch_assoc();   
            if($row)
            {
                $rows[]=$row;
                return $rows;
            }                      
        }
    }
?>