<?php
    session_start();
    include '../../../auth/connection.php';
    if (!isset($_SESSION['login'])) {
        echo "<script>window.location.href='../../../auth/'</script>";
    }
    if(isset($_GET['dropId'])){
        $id = $_GET['dropId'];
        $sql = "DELETE FROM `pro_tags` WHERE ID = $id";
        $runsql = mysqli_query($conn, $sql);
        echo "<script>alert('Tag Deleted Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
        
    }
?>