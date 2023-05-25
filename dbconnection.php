<?php 

    $connection = new mysqli("localhost", "root", "", "box");

    if($connection->connect_error)
    {
        echo "MySQL failed. " . $connection->error;
        exit();
    }

?>