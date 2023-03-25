<?php
    $db_connect = mysqli_connect("localhost", "root", "", "anthony_db");

    if($db_connect) {
        echo "Connected";
    } else {
        echo "Not Connected";
    }
?>