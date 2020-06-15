<?php
    require_once ('../model/jazz_model.php');
    class JazzController extends JazzModel
    {       
        //gets page data
        public function recieveData()
        {            
            $row = $this->getData();        
            return $row;
        }
        //gets timetables
        public function recieveTimetables($date)
        {
            $row = $this->getTimetables();               
            foreach($row as $res)
            {
                if($res['date'] == $date)
                {                    
                    echo "<tr><td>"
                    .$res['location']."</td><td>"
                    .$res['timing']."</td><td>"
                    .$res['band']."</td><td>"
                    ,"&euro;".$res['price']."</td></tr>";
                }                
            }
            return $row;
        }  
        //gets date from database and changes format for easier viewing   
        public function recieveDate($date)
        {            
            $row = $this->getTimetables();
            foreach($row as $res)
            {
                if($res['date'] == $date)
                {                    
                    $date1 = $res['date'];
                    $newDate = date("l, F d", strtotime($date1));
                    echo '<h2>'.$newDate.'</h2>';         
                    break;           
                }
            }
            return $newDate;
        }
        //gets a ticket for a specific band and date 
        public function recieveTicket($band,$date)
        {
            $row = $this->getTimetables();            
            foreach($row as $res)
            {
                if($res["band"] == $band && $res["date"] == $date)
                {    
                    //storing an array in a ticket variable for shopping cart                              
                    $tickets = array("item_id"=>$res['id'],"item_name"=>$res['band'],"item_date"=>$res['date'],"item_price"=>$res['price'],"item_quantity"=>$_POST["quantity"]);                                                                     
                }
            }
            return $tickets;
        }             
    }
?>