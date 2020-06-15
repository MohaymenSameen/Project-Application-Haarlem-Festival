<?php
    require_once ('../../dbconnection/dbconnection.php');
    class JazzModel extends Database
    {
        public function getData()
        {
            $sql="SELECT * FROM jazz_content_en";
            $result = $this->connect()->query($sql);              
            $row=$result->fetch_assoc();//fetching array in row variable
            if($row) 
            {
                $rows[]=$row;//storing row in an array;
            }                      
            return $rows;                                         
        }
        public function getTimetables()
        {
            $sql = "SELECT * FROM jazz_timetable";
            $result = $this->connect()->query($sql);
            $row=$result->fetch_assoc();
            $num_rows=$result->num_rows;
            if($num_rows>0)
            {
                while($row= $result->fetch_assoc())
                {
                    $rows[]=$row;                          
                }
                return $rows;
            }               
        }         
    }
?>