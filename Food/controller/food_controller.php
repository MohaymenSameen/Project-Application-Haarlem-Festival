<?php
    require_once ('../model/food_model.php');
    include ('../shopping_cart.php');
    
    class FoodController
    {
        
        //data for the page
        public function recievePageData()
        {    
            $foodModel= new FoodModel();        
            $row = $foodModel->get("SELECT * FROM food_content");    //getPageData not working!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11        
            return $row; 
        }

        //storing each row from database by count for the id
        public function recieveRestaurantData($count)
        {
            $foodModel= new FoodModel();                     
            $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='$count'");     
            $count=$count+1;  
            return $row;
        }

        
        //shopping cart
        public function shoppingCart(){
            $tickets = array("item_date" => "July 26th, Thursday", "rest_name" => "Ratatuile", "item_time" => "19:00","item_name" => "Ticket", "item_price" => "10", "item_quantity" => "2", "item_id" => "1");
            $cart = new ShoppingCart();
            $cart->createShoppingCart($tickets);
            $cart->displayShoppingCart();
        }
        


        // public function recieveRestaurant1()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='1'");       
        //     return $row;
        // }
        // public function recieveRestaurant2()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='2'");       
        //     return $row;
        // }
        // public function recieveRestaurant3()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='3'");       
        //     return $row;
        // }
        // public function recieveRestaurant4()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='4'");       
        //     return $row;
        // }
        // public function recieveRestaurant5()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='5'");       
        //     return $row;
        // }
        // public function recieveRestaurant6()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='6'");       
        //     return $row;
        // }
        // public function recieveRestaurant7()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='7'");       
        //     return $row;
        // }
        // public function recieveRestaurant8()
        // {   
        //     $foodModel= new FoodModel();                     
        //     $row = $foodModel->getRestaurant("SELECT * FROM restaurants WHERE id='8'");       
        //     return $row;
        // }
       
    }

    //storing page data into an array cells to display them in food_view
    $contr=new FoodController();
    $data=$contr->recievePageData();       
    foreach($data as $res)
    {
        $headerDates=$res['header'];    
        $intro=$res['intro'];
        $note=$res['note1'];
        $banner=$res['banner'];
        $title=$res['title'];
        $feeText=$res['text'];
        $cs1=$res['cs1'];
        $cs2=$res['cs2'];
    }


    //storing restaurants data into an array's cells 
    
    $name=array();
    $address=array();
    $type=array();
    $price=array();
    $price_kids=array();
    $seats=array();
    $stars=array();
    $session=array();
    $startTime=array();

    for ($i = 0; $i <= 8; $i++)
    {
        $restaurants=$contr->recieveRestaurantData($i);
        foreach((array)$restaurants as $res)
        {
            $name[$i]=$res['name'];    
            $address[$i]=$res['address'];
            $type[$i]=$res['type'];
            $price[$i]=number_format($res['price'],2);
            $price_kids[$i]=number_format($res['price_kids'],2);
            $seats[$i]=$res['seats'];
            $stars[$i]=$res['stars'];
            $sessions[$i]=$res['sessions'];
            $startTime[$i]=$res['start_time'];
        }
    }

?>