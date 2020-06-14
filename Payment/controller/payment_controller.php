<?php
    require_once ('../model/payment_model.php');
    require_once "../mollie-api-php/vendor/autoload.php";
    require_once "../mollie-api-php/examples/functions.php";
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class PaymentController extends PaymentModel
    {   
        //putting order in model function            
        public function putOrder($firstname,$lastname,$emailAddress,$paymentMethod,$status)
        {
            $this->insertOrder($firstname,$lastname,$emailAddress,$paymentMethod,$status);
        }

        //payment function
        public function payment($firstname,$lastname,$emailAddress,$paymentMethod)
        {
            //initializing payment system
            $mollie = new \Mollie\Api\MollieApiClient();
            $mollie->setApiKey("test_Ds3fz4U9vNKxzCfVvVHJT2sgW5ECD8");

            $payment = $mollie->payments->create(
                [
                    "amount" =>
                    [
                        "currency" => "EUR",
                        "value" => "".$_SESSION['totalPrice'].".00"                
                    ],     
                "method" => "$paymentMethod",      
                "description" => "Order for the Haarlem Festival for $firstname $lastname",
                "redirectUrl" => "http://localhost/Home/view/home_view.php",
                ]
            );           
            header("Location: " . $payment->getCheckoutUrl(), true, 303);
                        
            $confirmPayment = $mollie->payments->get($payment->id);

            //if payment has been payed, status = paid else notpaid
            if ($confirmPayment->isPaid())
            {                
                $this->putOrder($firstname,$lastname,$emailAddress,$paymentMethod,'paid');
            }
            else
            {                
                $this->putOrder($firstname,$lastname,$emailAddress,$paymentMethod,'notpaid');
            }
        }        
    }
?>