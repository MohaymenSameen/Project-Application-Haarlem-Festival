<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-searchUsers.css" rel="stylesheet" type="text/css">
    </head>
    <body>    
        <section>
            <h1><img src="img/registerPayment.png" alt="icon search users"> Register Payment</h1>
            <hr id="longLine"/>
        </section>
        <section>
            <form>
                <label>Search Order ID <input type="text" placeholde="000354" ></label>
                <button class="buttonsLila" type="button">Search</button>
            </form>
        </section>
        <section>
            <label>Order ID: </label>
                <!--<label for="name"><?php echo $name; ?></label>-->
            <label>Description: </label>  
            <table>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
            </table> 
            <label>Total price: </label>
                <!--<label for="totalPrice"><?php echo $totalPrice; ?></label>-->
            <label>Status: </label>
            <button id="redButton" type="button">Not Paid</button>
            <button id="greedButton" type="button">Paid</button>
        </section>

        
    </body>
</html>