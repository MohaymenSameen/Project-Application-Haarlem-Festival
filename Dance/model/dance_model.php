<?php
    require_once ('../../dbconnection/dbconnection.php');
    class DanceModel extends Database //wrong way to do this?
    {
        /*retrieve all the content from the database except the timetables*/
        public function getData()
        {
            $sql="SELECT * FROM dance_content";
            $result = $this->connect()->query($sql);              
            $row=$result->fetch_assoc();
            while($row)
            {
                $rows[]=$row;  //only one row?  
                return $rows;                          
            }            
        }
        /*retrieve timetable 1*/
        public function getTimetable1()
        {
            $sql="SELECT * FROM dance_timetables WHERE date='July 27th, Friday'";
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
        /*retrieve timetable 2*/
        public function getTimetable2()
        {
            $sql="SELECT * FROM dance_timetables WHERE date='July 28th, Saturday'";
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
        /*retrieve timetable 3*/
        public function getTimetable3()
        {
            $sql="SELECT * FROM dance_timetables WHERE date='July 29th, Sunday'";
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
    }
?>