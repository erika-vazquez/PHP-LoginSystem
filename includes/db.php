<?php
    $servername= 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project_db';

    //creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //check connection
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected Sucessfully<br>";
?>
