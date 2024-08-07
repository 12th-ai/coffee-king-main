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
    <title>Product ~ Comments</title>
    <link rel="stylesheet" href="../f.css">
</head>

<body>
    <div class="main">
        <?php
        include "../profile.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Product ~ Comments</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <div class="top-btns">
                    <a href="./" id="open">Products</a>
                    <a href="./replies.php" id="open">Replies</a>
                </div>
                <div class="oth-right-btm-table">
                    <table>
                        <th colspan="20">Scroll Horizontally For More Info</th>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Comment</th>
                            <th>Post</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM pro_comments");
                        while ($galrow = mysqli_fetch_array($sql)) {
                            $id = $galrow['ID'];
                            $name = $galrow['User'];
                            $img = $galrow['Img_Name'];
                            $email = $galrow['Email'];
                            $comment = $galrow['Comment'];
                            $date = $galrow['Date'];
                            $prod = $galrow['ProdID'];
                            $getprod = mysqli_query($conn, "SELECT * FROM product WHERE ID = $prod");
                            $fetchprod = mysqli_fetch_array($getprod);
                            $prodname = $fetchprod['Product_Name'];
                            // $title = $get['Title'];
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
                                    <img src="../../../ui/assets/products/comments/<?php echo $img ?>" alt="">
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $email ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $date ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $comment ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <a href="../../../ui/pages/explore/shop/product/?product=<?php echo $prod ?>" class="link"><?php echo $prodname ?></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space ">
                                        <?php
                                        $getreply = mysqli_query($conn, "SELECT * FROM pro_replies WHERE CommentID = $id AND ProdID = $prod");
                                        if (mysqli_num_rows($getreply) > 0) {
                                        ?>
                                            <a href="../../../ui/pages/explore/shop/product/?product=<?php echo $prod ?>#reviews"><?php echo mysqli_num_rows($getreply) ?> Replies</a>
                                        <?php } ?>
                                        <a href='delete.php?dropprodCommentId="<?php echo $id ?>"'>Delete</a>
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