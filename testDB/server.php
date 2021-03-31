<?php
    $servername = "localhost";
    $username="root";
    $password="392543";
    $dbname="register_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        echo("Connection failed".mysqli_connect_error());
    }else{
        echo("Connection Successfully");
    }
?>