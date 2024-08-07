<?php
    include '../../auth/connection.php';
    if(isset($_GET['dropId'])){
        $id = $_GET['dropId'];
        $sql = "DELETE FROM `gallery` WHERE ID = $id";
        $runsql = mysqli_query($conn, $sql);
        echo "<script>alert('Image Deleted Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
?>