<?php
    require_once ('../../dbconnection/dbconnection.php');
    class PaymentModel extends Database
    {
        //inserting data into database
        public function insertOrder($firstname,$lastname,$emailAddress,$paymentMethod,$status)
        {
            $sql = "INSERT INTO orders (firstname,lastname,email_address,payment_method,status)
            VALUES('$firstname','$lastname','$emailAddress','$paymentMethod','$status')";
            $this->connect()->query($sql);
        }
    }
?>