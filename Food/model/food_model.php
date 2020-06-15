<?php
    require_once ('../dbconnection.php');
    
    class FoodModel
    {
        
        //function for storing the fetched data into an array
        public function get($querys)
        {
            $db = new Database(); //instatiate instead of inheritance :Database  /ako go nasledq imam dostyp do vsichko v db classa private
            $sql=$querys;
            $result = $db->connect()->query($sql);              
            $row=$result->fetch_assoc();
            while($row)
            {
                $rows[]=$row;    
                return $rows;                          
            }            
        }

        //function for fetching specific row form the database and storing its data into an array
        public function getRestaurant($querys)
        {
            $db = new Database(); //instead of :Database 
            $sql=$querys;
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

