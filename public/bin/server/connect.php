<?php 
    $servername = "localhost";
    $username = "root";
    $passwrd = "Hitler20.";
    $database = "sysmedical";
                                
    $connect = mysqli_connect($servername, $username, $passwrd, $database);
    
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>