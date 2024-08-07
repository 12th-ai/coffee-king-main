<?php
    include '../../auth/connection.php';
    session_start();
    if (!isset($_SESSION['login'])) {
        echo "<script>window.location.href='../../auth/'</script>";
    }
    if(isset($_GET['dropId'])){
        $id = $_GET['dropId'];
        $sql = "DELETE FROM `team` WHERE ID = $id";
        $runsql = mysqli_query($conn, $sql);
        echo "<script>alert('Team Member Deleted Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
?>