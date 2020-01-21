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
        public function getTimetable1()
        {
            $sql="SELECT * FROM jazz_timetable WHERE date='July 26th, Thursday'";
            $result = $this->connect()->query($sql);              
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
        public function getTimetable2()
        {
            $sql="SELECT * FROM jazz_timetable WHERE date='July 27th, Friday'";
            $result = $this->connect()->query($sql);              
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
        public function getTimetable3()
        {
            $sql="SELECT * FROM jazz_timetable WHERE date='July 28th, Saturday'";
            $result = $this->connect()->query($sql);              
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
        public function getTimetable4()
        {
            $sql="SELECT * FROM jazz_timetable WHERE date='July 29th, Sunday'";
            $result = $this->connect()->query($sql);              
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
        public function getPrice($group, $time)
        {            
            $sql="SELECT price FROM jazz_timetable WHERE band='$group' AND date='$time'";
            $result = $this->connect()->query($sql);              
            $row=$result->fetch_assoc();
            if($row)
            {   
                return $row['price'];     
            }             
        }
    }
?>