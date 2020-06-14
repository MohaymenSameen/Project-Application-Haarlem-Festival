<?php
    class ShoppingCart
    {
        //adding ticket to shopping cart
        public function createShoppingCart($tickets)
        {
            //if session exists
            if(isset($_SESSION['shopping_cart']))
            {   
                //count the elements and add ticket to cart         
                $count = count($_SESSION['shopping_cart']);               
                $_SESSION['shopping_cart'][$count] = $tickets;                
            }
            else
            {        
                //if session not set add a new ticket      
                $_SESSION['shopping_cart'][0] = $tickets;                  
            }           
        }
        //display shopping cart
        public function displayShoppingCart()
        {
            //getting full url 
            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            //if cart is not empty
            if(!empty($_SESSION['shopping_cart']))
            {
                $total=0;
                echo '<h2 id="recent">Recently Added Items</h2>';
                echo '<hr>';
                foreach($_SESSION['shopping_cart'] as $keys => $values)
                {
                    $newDate = date("l, F d", strtotime($values["item_date"]));
                    echo '<h2 id="quantity">'.$values["item_name"].'</h2>';
                    echo '<h2 id="band">'.'<strong>',"Date: ",'</strong>',$newDate.'</h2>';                                
                    echo '<h2 id="band">'.'<strong>',"Price: ",'</strong>',"&euro;",$values["item_price"].'</h2>';
                    echo '<h2 id="band">'.'<strong>',"Quantity: ",'</strong>',$values["item_quantity"],"x".'</h2>';
                    $total += $values["item_quantity"]*$values["item_price"];                   
                    echo "<h2><a href=".$url."?action=delete&id=".$values["item_id"]." id='band' style='font-size:15pt; font-weight:normal;'>Remove</a></h2>";                    
                    echo '<hr>';                                
                } 
                $_SESSION['totalPrice'] = $total;               
                echo '<h2>'."Total Price: ","&euro;",$_SESSION['totalPrice'].'</h2>';                      
            }
            else
            {
                echo '<h2>'."Shopping Cart Is Empty".'</h2>';
            }           
        }      
        //removing ticket from cart  
        public function removeFromCart()
        {
            //base url refresh
            $url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
            if(isset($_GET["action"]))
            {
                if($_GET["action"] == "delete")
                {                   
                    foreach($_SESSION['shopping_cart'] as $keys => $values)
                    {
                        if($values["item_id"] == $_GET["id"])
                        {
                            unset($_SESSION['shopping_cart'][$keys]); 
                            header("Location: $url");                            
                        }
                    }                    
                }                
            }                      
        }
    }
?>