<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style/form.css">
    <script src="js/hamburger.js" defer></script>
    <title>Box Website - Form</title>
</head>
<body>
    
    <?php include("navbar.php"); ?>


    <div class="form-container">

        <p>Please, enter your data.</p>
        <div class="horisontal-line"></div>

        <form>
            <label>First Name</label>
            <input type="text" placeholder="Your first name..." />
            
            <label>Last Name</label>
            <input type="text" placeholder="Your last name..." />

            <label>Phone Number</label>
            <input type="text" placeholder="Your phone number..." />

            <label>E-mail Address</label>
            <input type="text" placeholder="Your e-mail address..." />

            <input class="input-submit" type="submit" value="SEND" />
        </form>
        
    </div>
    
    
    <?php include("footer.php"); ?>

</body>
</html>