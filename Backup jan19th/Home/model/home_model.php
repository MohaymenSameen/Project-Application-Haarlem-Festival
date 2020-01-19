<?php
    require_once ('../../dbconnection/dbconnection.php');
    class HomeModel extends Database
    {
        public function getCountdown()
        {
            $sql="SELECT * FROM home_countdown ORDER BY id DESC";
            $result = $this->connect()->query($sql);              
                       
            while($row=$result->fetch_array())
            {                   
                $rows[]=$row;                
                return $rows;           
            }            
        }
    }
?>