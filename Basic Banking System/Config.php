<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Indian Bank";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)

        die("Could not connect the DB due to following error -- >".$mysqli_connect_error())
    
    

?>