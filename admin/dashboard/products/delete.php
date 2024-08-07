<?php
    session_start();
    include '../../auth/connection.php';
    if (!isset($_SESSION['login'])) {
        echo "<script>window.location.href='../../auth/'</script>";
    }
    include '../../auth/connection.php';
    if(isset($_GET['dropId'])){
        $id = $_GET['dropId'];
        $sql = "DELETE FROM `blog` WHERE ID = $id";
        $sql2 = mysqli_query($conn, "DELETE FROM comments WHERE PostID = $id");
        $sql3 = mysqli_query($conn, "DELETE FROM replies WHERE PostID = $id"); 
        $runsql = mysqli_query($conn, $sql);
        echo "<script>alert('Blog Deleted Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
    if(isset($_GET['dropCommentId'])){
        $id = $_GET['dropCommentId'];
        $qq = mysqli_query($conn, "SELECT * FROM pro_comments WHERE ID = $id");
        $qqrun = mysqli_fetch_array($qq);
        $prodid = $qqrun['ProdID'];
        $blogup = mysqli_query($conn, "SELECT * FROM product WHERE ID = $prodid");
        $bloguprun = mysqli_fetch_array($blogup);
        $blogcmt = $bloguprun['Comments'];
        $newblog = $blogcmt - 1;
        $blognew = mysqli_query($conn, "UPDATE prod SET Comments = $newblog WHERE ID = $prodid");
        $sql = mysqli_query($conn, "DELETE FROM comments WHERE ID = $id");
        $sql1 = mysqli_query($conn, "DELETE FROM replies WHERE CommentID = $id");
        echo "<script>alert('Commented Deleted Successfully')</script>";
        echo "<script>window.location.href = 'comments.php'</script>";
    }
    if(isset($_GET['archiveId'])) {
        $id = $_GET['archiveId'];
        $sql = mysqli_query($conn, "UPDATE blog SET `Status` = 0 WHERE ID = $id");
        echo "<script>alert('Post Archived Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
    if(isset($_GET['UnarchiveId'])) {
        $id = $_GET['UnarchiveId'];
        $sql = mysqli_query($conn, "UPDATE blog SET `Status` = 1 WHERE ID = $id");
        echo "<script>alert('Post UnArchived Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
    if(isset($_GET['dropReplyId'])){
        $id = $_GET['dropReplyId'];
        $sql1 = mysqli_query($conn, "DELETE FROM pro_replies WHERE ID = $id");
        echo "<script>alert('Reply Deleted Successfully')</script>";
        echo "<script>window.location.href = 'comments.php'</script>";
    }
?>