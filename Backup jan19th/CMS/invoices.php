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
            <h1><img src="img/invoicesicon.png" alt="icon search users">Invoices</h1>
            <hr id="longLine"/>
        </section>
        <section>
            <form>
                <label>Search by Invoice ID: <input type="text" placeholde="000354" ></label>
                <button class="buttonsLila" type="button">Search</button>
                <label>Filter by date:<input id = "withIcon" type="text" placeholde="(dd/mm/yyyy)" ></label><!--is it mandatory-->
                <button class="buttonsLila" type="button">Filter</button>
            </form>
        </section>
        <section>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Status</th> <!--napravi go kato butoni-->
                </tr>
            </table> 
            <button class="buttonsLila" type="button">Download</button>
            <label>*To download an invoice, select it in the the table and click the button </label>
        </section>

        
    </body>
</html>