<?php 
    if (!isset($_SESSION['firstName']) || !isset($_SESSION['lastName'])) {
        header("location: ../public/authentification.php");
        exit;
    }
?>