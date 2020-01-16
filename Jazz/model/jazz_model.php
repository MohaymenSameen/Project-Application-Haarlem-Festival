<?php
    require_once ('../../dbconnection/dbconnection.php');
    class JazzModel extends Database
    {
        public function getData()
        {
            $sql="SELECT * FROM jazz_content_en";
            $result = $this->connect()->query($sql);              
            $row=$result->fetch_assoc();
            while($row)
            {
                $rows[]=$row;                
                return $rows;                
            }
        }
    }
?>