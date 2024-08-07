<?php
session_start();
include '../../auth/connection.php';
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='../../auth/'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog ~ Replies</title>
    <link rel="stylesheet" href="../f.css">
</head>

<body>
    <div class="main">
        <?php
        include "../profile.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Blog ~ Replies</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <div class="top-btns">
                    <a href="./" id="open">Blogs</a>
                    <a href="./comments.php" id="open">Comments</a>
                </div>
                <div class="oth-right-btm-table">
                    <table>
                        <th colspan="20">Scroll Horizontally For More Info</th>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Reply</th>
                            <th>Post</th>
                            <th>Comment</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM replies");
                        while ($galrow = mysqli_fetch_array($sql)) {
                            $id = $galrow['ID'];
                            $name = $galrow['Name'];
                            $img = $galrow['Img_Name'];
                            $email = $galrow['Email'];
                            $reply = $galrow['Reply'];
                            $comment = $galrow['CommentID'];
                            $post = $galrow['PostID'];
                            $date = $galrow['Date'];
                            $query = mysqli_query($conn, "SELECT * FROM blog WHERE ID = $post");
                            $get = mysqli_fetch_array($query);
                            $title = $get['Title'];
                            $query1 = mysqli_query($conn, "SELECT * FROM comments WHERE ID = $comment");
                            $get1 = mysqli_fetch_array($query1);
                            $comment1 = $get1['Comment']
                        ?>
                            <tr>
                                <div class="tr">
                                </div>
                                <td><?php echo $id ?></td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $name ?>
                                    </div>
                                </td>
                                <td>
                                    <img src="../../../ui/assets/blog/reply/<?php echo $img ?>" alt="">
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $date ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $email ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $reply ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt">
                                        <a href="../../../ui/pages/blog/pg/?blog=<?php echo $post ?>" class="link"><?php echo $title ?></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $comment1 ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space ">
                                        <a href='delete.php?dropReplyId="<?php echo $id ?>"'>Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>

</html>