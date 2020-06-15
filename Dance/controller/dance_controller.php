<?php
    require_once ('../model/dance_model.php');
    require_once ('../../ShoppingCart/shopping_cart.php');
    if(!isset($_SESSION)){
        session_start();
    }

    class DanceController 
    {
        //retrieve text data from model
        public function recieveData()
        {       
            $model = new DanceModel();     
            $row = $model->getData();
            
            return $row;
        }
        //retrieve a timetable from model
        public function recieveTimetable($date)
        {        
            $model = new DanceModel();                
            $row = $model->getTimetable($date);       
            return $row;
        }
        //display the shopping cart to the view
        public function displayCart(){
            $cart = new ShoppingCart();
            $cart->displayShoppingCart();
        }
        //remove item from the shopping cart
        public function removeFromCart(){
            $cart = new ShoppingCart();
            $remove = $cart->removeFromCart();
        }
    }

    //retrieve specific ticket from model to put into shopping cart
    if(isset($_POST["ticket"])){
        $model = new DanceModel();
        //use POST to retrieve the ticket information
        $row = $model->getTicket($_POST["date"], $_POST["dj"]);
        //set ticket variables
        foreach((array)$row as $res){
            $id = $res['id'];
            $dj = $res['dj'];
            $price = $res['price'];
            $date = $res['date'];
        }
        //create ticket
        $ticket = array("item_id" => $id, "item_name" => $dj, "item_price" => $price, "item_quantity" => $_POST["quantity"], "item_date" => $date);
        $cart = new ShoppingCart();
        //add ticket to database
        $cart->createShoppingCart($ticket);
        //return to page
        header("Location: ../view/dance_view.php");
    }

    //retrieve specific access pass from model to put into shopping cart
    if(isset($_POST["access_pass"])){
        $model = new DanceModel();
        //use POST to retrieve the access pass information
        $row = $model->getPass($_POST["pass"]);
        //set access pass variables
        foreach((array)$row as $res){
            $id = $res['id'];
            $dj = $res['dj'];
            $price = $res['price'];
            $date = $res['date'];
        }
        //create access pass
        $ticket = array("item_id" => $id, "item_name" => $dj, "item_price" => $price, "item_quantity" => $_POST["quantity"], "item_date" => $date);
        $cart = new ShoppingCart();
        //add access pass to cart
        $cart->createShoppingCart($ticket);
        //return to page
        header("Location: ../view/dance_view.php");
    }
?>