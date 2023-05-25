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
    <link rel="stylesheet" href="style/thank-you.css">
    <script src="js/hamburger.js" defer></script>
    <title>Box Website - Thank You</title>
</head>
<body>
    
    <?php include("navbar.php"); ?>


    <?php 

        include("dbconnection.php");

        $firstName = $_POST["first-name"];
        $lastName = $_POST["last-name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pack = $_POST["pack"];

        $code = $connection->prepare("insert into customer(CustomerFirstName, CustomerLastName, CustomerPhone, CustomerEmail, CustomerPack) values(?, ?, ?, ?, ?);");
        $code->bind_param("sssss", $firstName, $lastName, $email, $phone, $pack);
        $code->execute();
        
    ?>
    

    <div class="container-thank-you">
        <i class="fa fa-check"></i>
        <p>Thank you for your time!</p>
        <p>You bought the boxing package successfuly!</p>
    </div>

    
    <?php include("footer.php"); ?>

</body>
</html>