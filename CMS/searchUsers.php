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
            <h1><img src="../CMS/img/searchUsersicon.png" alt="icon search users"> Search Users</h1>
            <hr id="longLine"/>
        </section>
        <form>                    
            <label>Name <input type="text" ></label>         
            <label>Email Address<input type="text" ></label>
            <label>Registration Date<input type="text" placeholde="(dd/mm/yyyy)" ></label> <!-- not sure for this one-->
            <button class="buttonsLila" type="button">Search</button>
            
        </form> 

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Registration Date</th>
                <th>Role</th>
                <th>E-mail Address</th>
            </tr>
        </table>
    </body>
</html>
    