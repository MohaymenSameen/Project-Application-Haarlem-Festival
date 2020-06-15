<?php
    require_once ('../../dbconnection/dbconnection.php');
    class DanceModel //wrong way to do this?
    {

        /*retrieve all the content from the database except the timetables*/
        public function getData()
        {
            $db = new Database();
            $sql="SELECT * FROM dance_content";
            $result = $db->connect()->query($sql);              
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
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE date='July 27th, Friday'";
            $result = $db->connect()->query($sql);              
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
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE date='July 28th, Saturday'";
            $result = $db->connect()->query($sql);              
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
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE date='July 29th, Sunday'";
            $result = $db->connect()->query($sql);              
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

        public function getTicket($date, $dj){
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE `date`='$date' AND `dj`='$dj'";
            $result = $db->connect()->query($sql);              
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