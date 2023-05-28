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
    <script src="js/from.js" defer></script>
    <title>Box Website - Form</title>
</head>
<body>
    
    <?php include("navbar.php"); ?>

    <?php 

        $pack = "OnlyForm";

        if(isset($_GET["pack"]))
        {
            $pack = $_GET["pack"];
        }
        
    ?>


    <div class="form-container">

        <p>Please, enter your data.</p>
        <div class="horisontal-line"></div>

        <form id="from" action="thank-you.php" method="post">
            <label id="label-first-name">First Name</label>
            <input id="input-first-name" type="text" name="first-name" placeholder="Your first name..." />
            
            <label id="label-last-name">Last Name</label>
            <input id="input-last-name" type="text" name="last-name" placeholder="Your last name..." />

            <label id="label-phone-number">Phone Number</label>
            <input id="input-phone-number" type="text" name="phone" placeholder="Your phone number..." />

            <label id="label-email-address">E-mail Address</label>
            <input id="input-email-address" type="text" name="email" placeholder="Your e-mail address..." />

            <input type="hidden" name="pack" value="<?php echo $pack; ?>" />

            <input class="input-submit" type="submit" value="SEND" />
        </form>
        
    </div>
    
    
    <?php include("footer.php"); ?>

</body>
</html>