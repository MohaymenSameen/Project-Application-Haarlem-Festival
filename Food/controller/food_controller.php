<?php
    require_once ('../model/food_model.php');
    include ('../shopping_cart.php');
    session_start();
    
    class FoodController
    {
        
        //data for the page
        public function recievePageData()
        {    
            $foodModel= new FoodModel();        
            $row = $foodModel->get("SELECT * FROM food_content");       
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

            $cart = new ShoppingCart();
            $cart->displayShoppingCart();
           /* var_dump($_POST);
            //shopping cart take data from form
            if(isset($_POST['addToCart'])){

                //variables with all fileds'values from the reservation form
                $price = 10;
                $date = $_POST['date_option'];
                $time = $_POST['time_option'];
                $restaurant = $_POST['restaurant_option'];
                $people = $_POST['people_option'];
                $namePerson = $_POST['nameOfPerson'];
                $note = $_POST['note'];
                $id = 1;

            }
            $tickets = array("item_date" => $date, "rest_name" => $restaurant, "item_time" => $time,"item_name" => "Reservation", "item_price" => $price, "item_quantity" => $people, "item_id" => $id);
            $cart = new ShoppingCart();
            $cart->createShoppingCart($tickets);
            $cart->displayShoppingCart();
            $id = $id +1;
            //header("Location: ../view/food_view.php");*/
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

    //shopping cart take data from form and check if the required fileds are filled
	if(isset($_POST['addToCart'])){
        //variables with all fileds'values from the reservation form
        $price = 10;
        $date = $_POST['date_option'];
        $time = $_POST['time_option'];
        $restaurant = $_POST['restaurant_option'];
        $people = $_POST['people_option'];
        $namePerson = $_POST['nameOfPerson'];
        $note = $_POST['note']; 
        $id = 1;

        //check if the required fileds are filled
        if($date != "" || $time != "" || $restaurant != ""|| $people != "")  {
            $tickets = array("item_date" => $date, "rest_name" => $restaurant, "item_time" => $time,"item_name" => "Reservation", "item_price" => $price, "item_quantity" => $people, "item_id" => $id);
            $cart = new ShoppingCart();
            $cart->createShoppingCart($tickets);
            $id = $id +1;
            header("Location: ../view/food_view.php");
        } else {
            //if no seletion is made
            echo "Please fill all required fields.";
        }
    } 

?>