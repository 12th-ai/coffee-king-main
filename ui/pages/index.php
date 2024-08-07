<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="../css/404/main.css">
</head>
<?php 
    include "../../admin/auth/connection.php";
?>
<body>
    <?php 
        $sql = mysqli_query($conn, "SELECT * FROM errorimg WHERE ID  = 1");
        while ($row = mysqli_fetch_array($sql)) {
            $img = $row['img_name'];
        }
        $path = "../assets/gallery/" . $img;
        include "../404.php";
    ?>
</body>
</html>