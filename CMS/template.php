<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haarlem Festival</title>
        <link href="css/style-edits.css" rel="stylesheet" type="text/css">
    </head>
    <body> 
    <li id="backBtn"><a href="../admin.php">Back CMS</a></li>
    <section>
        <h1>Create Page </h1>
    </section>
    <section>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Header title:</label>
                    <input type="text" name="headerTitle" value="<?php echo $headerTitle; ?>">
                </div>
                <form action="/action_page.php">
                    <label>Header image:</label> 
                    <input type="file" name="pic" accept="image/*">            
                </form>
                <div class="form-group">
                    <label>Paragraph 1 title:</label>
                    <input type="text" name="phTitle" value="<?php echo $phTitle; ?>">
                </div>
                <div class="form-group">
                    <label>Paragraph 1 text:</label>
                    <input type="text" name="phTxt" value="<?php echo $phTxt; ?>">
                </div>
                <form action="/action_page.php">
                    <label>Intermediate image:</label> 
                    <input type="file" name="pic" accept="image/*">            
                </form>
                <div class="form-group">
                    <label>Program Dates:</label>
                    <input type="text" name="datesHeader" value="<?php echo $datesHeader; ?>">
                </div>
                <div class="form-group">
                    <label>Date 1:</label>
                    <input type="text" name="date1" value="<?php echo $date1; ?>">
                </div>
                <div class="form-group">
                    <label>Date 2:</label>
                    <input type="text" name="date2" value="<?php echo $date2; ?>">
                </div>
                <div class="form-group">
                    <label>Date 3:</label>
                    <input type="text" name="date3" value="<?php echo $date3; ?>">
                </div>

                <button class="buttonsLila" type="button">Save</button>
            </form>
    </section>

</body>
</html>