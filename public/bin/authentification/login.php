<?php 
    session_start();
    include "/laragon/www/systemeMedical/public/bin/server/connect.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first_name = $_POST['firstName'];
        $_SESSION['firstName'] = $first_name;
        $last_name = $_POST['lastName'];
        $_SESSION['lastName'] = $last_name;

        $sql = "SELECT * FROM users WHERE nom = ? AND prenom = ?";
        $stmt = $connect->prepare($sql);
        $stmt->bind_param('ss', $first_name, $last_name);
        
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (!$row) {
            // print_r($row);
            echo "nom ou prenom invalid, veuillez saisir un utilisateur deja exciste" . $connect->error;
        //  echo 1;
            die;
        } else {
            // echo 2;
            header ("location: ../../index.php");
            exit;
        }
    }

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=""></a>
</body>
</html> -->