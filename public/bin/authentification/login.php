<?php 
    include "/laragon/www/systemeMedical/public/bin/server/connect.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];

        $sql = "SELECT * FROM users WHERE nom = ? AND prenom = ?";
        
        $stmt = $connect->prepare($sql);
        $stmt->bind_param('ss', $first_name, $last_name);
        
        $stmt->execute();
        $result = $stmt->get_result();

        if (!$result) {
            echo "nom ou prenom invalid, veuillez saisir un utilisateur deja exciste" . $connect->error;
        } else {
            header ("location: ../../index.php");
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