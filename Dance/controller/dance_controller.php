<?php
    require_once ('../model/dance_model.php');
    require_once ('../../ShoppingCart/shopping_cart.php');
    session_start();

    class DanceController  //wrong way to implement mvc?
    {

        public function recieveData()
        {       
            $model = new DanceModel();     
            $row = $model->getData();
            
            return $row;
        }
        public function recieveTimetable1()
        {        
            $model = new DanceModel();                
            $row = $model->getTimetable1();       
            return $row;
        }
        public function recieveTimetable2()
        {          
            $model = new DanceModel();     
            $row = $model->getTimetable2();            
            return $row;
        }
        public function recieveTimetable3()
        {       
            $model = new DanceModel();                
            $row = $model->getTimetable3();            
            return $row;
        }
        public function displayCart(){
            $cart = new ShoppingCart();
            $cart->displayShoppingCart();
        }
        
    }

    if(isset($_POST["ticket"])){
        $model = new DanceModel();
        $row = $model->getTicket($_POST["date"], $_POST["dj"]);
        foreach((array)$row as $res){
            $id = $res['id'];
            $dj = $res['dj'];
            $price = $res['price'];
            $date = $res['date'];
        }
        $ticket = array("item_id" => $id, "item_name" => $dj, "item_price" => $price, "item_quantity" => $_POST["quantity"], "item_date" => $date);
        $cart = new ShoppingCart();
        $cart->createShoppingCart($ticket);
        $id = null;
        $dj = null;
        $price = null;
        $date = null;
        header("Location: ../view/dance_view.php");
    }
?>