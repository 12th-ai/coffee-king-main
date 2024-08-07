<?php
session_start();
include './auth/connection.php';
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='./auth/'</script>";
}
?>