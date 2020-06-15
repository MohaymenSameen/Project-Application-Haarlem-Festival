<?php
    require_once ('../../dbconnection/dbconnection.php');
    class DanceModel 
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
        /*retrieve a timetable*/
        public function getTimetable($date)
        {
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE date='$date'";
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
        /*retrieve a ticket from the database using the date and dj */
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
        /*retrieve an access pass from the database using its name*/
        public function getPass($pass){
            $db = new Database();
            $sql="SELECT * FROM dance_timetables WHERE `dj`='$pass'";
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