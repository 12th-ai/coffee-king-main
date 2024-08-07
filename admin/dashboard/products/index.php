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
    <title>Products</title>
    <link rel="stylesheet" href="../f.css">
</head>

<body>
    <div class="main">
        <?php
        include "../profile.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Products</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <div class="top-btns">
                    <a href="./add.php" id="open">+ Add</a>
                    <a href="./" id="open">
                        All Products
                    </a>
                    <a href="./tags/" id="open">
                        Tags
                    </a>
                    <a href="./categories/  " id="open">
                        Categories
                    </a>
                    <a href="./comments.php" id="open">
                        Comments
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pro_comments "));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                    <a href="./replies.php" id="open">
                        Replies
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pro_replies "));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                </div>
                <div class="oth-right-btm-table">
                    <table>
                        <th colspan="20">Scroll Horizontally For More Info</th>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Stock Quantity</th>
                            <th>Preview Image</th>
                            <th>Sub Image 1</th>
                            <th>Sub Image 2</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Brief</th>
                            <th>Description</th>
                            <th>Comments</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM product ORDER BY ID DESC");
                        while ($galrow = mysqli_fetch_array($sql)) {
                            $id = $galrow['ID'];
                            $name = $galrow['Product_Name'];
                            $pic = $galrow['Main_Preview'];
                            $pic1 = $galrow['Sub_Preview_1'];
                            $pic2 = $galrow['Sub_Preview_2'];
                            $price = $galrow['Product_Price'];
                            $discount = $galrow['Product_Discount'];
                            $brief = $galrow['Brief'];
                            $quantity = $galrow['Quantity'];

                            $tags = $galrow['Tags'];
                            $tagsql = mysqli_query($conn, "SELECT * FROM pro_tags WHERE ID = $tags");
                            $tagsqlfetch = mysqli_fetch_array($tagsql);
                            $tagname = $tagsqlfetch['Tag_Name'];

                            $categories = $galrow['Categories'];
                            $categorysql = mysqli_query($conn, "SELECT * FROM pro_categories WHERE ID = $categories");
                            $categorysqlfetch = mysqli_fetch_array($categorysql);
                            $categoryname = $categorysqlfetch['Category_Name'];

                            $descr = $galrow['Description'];
                            $comments = $galrow['Comments'];



                            // $query = mysqli_query($conn, "SELECT * FROM team WHERE ID = $writer");
                            // $teamrow = mysqli_fetch_array($query);
                            // $names = $teamrow['Names'];
                        ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td>
                                    <div class="td-txt-space">
                                        <a href="../../../ui/pages/explore/shop/product/?product=<?php echo $id ?>" class="link"><?php echo $name ?></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $price ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $discount ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $quantity ?>
                                    </div>
                                </td>
                                <td>
                                    <img src="../../../ui/assets/products/<?php echo $pic ?>" alt="">
                                </td>
                                <td>
                                    <img src="../../../ui/assets/products/<?php echo $pic1 ?>" alt="">
                                </td>
                                <td>
                                    <img src="../../../ui/assets/products/<?php echo $pic2 ?>" alt="">
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $categoryname ?>
                                    </div>
                                </td>
                                <td><?php echo $tagname ?></td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $brief ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt large-td-txt">
                                        <?php echo $descr ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $comments ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space td-txt-wide-space">
                                        <a href='updatepic.php?updateId="<?php echo $id ?>"'>Update Images</a>
                                        <a href='update.php?updateId="<?php echo $id ?>"'>Update</a>
                                        <a href='delete.php?dropId="<?php echo $id ?>"'>Delete</a>
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