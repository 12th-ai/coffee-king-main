<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include '../../auth/connection.php';
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='../../auth/'</script>";
}
$id = $_GET['updateId'];
$query = "SELECT * FROM product WHERE ID = $id";
$runquery = mysqli_query($conn, $query);
$fetch = mysqli_fetch_assoc($runquery);
$name = $fetch['Product_Name'];
$price = $fetch['Product_Price'];
$discount = $fetch['Product_Discount'];
$brief = $fetch['Brief'];
$stock = $fetch['Quantity'];
$categories = $fetch['Categories'];
$tags = $fetch['Tags'];
$pic = $fetch['Main_Preview'];
$minipic1 = $fetch['Sub_Preview_1'];
$minipic2 = $fetch['Sub_Preview_2'];
$descr = $fetch['Description'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['dprice'];
    $stock = $_POST['stock'];

    $tags = $_POST['tags'];

    $categories = $_POST['categories'];

    $brief = $_POST['brief'];
    $descr = $_POST['description'];

    $sql = mysqli_query($conn, "UPDATE product SET Product_Name ='$name', Product_Price = '$price' , Product_Discount = '$discount', Brief = '$brief', Quantity = '$stock',Categories  = '$categories',Tags = '$tags', `Description` = '$descr' WHERE ID = $id");
    if ($sql) {
        echo "<script>alert('Product Updated Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Product Updating Failed')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../f.css">
</head>

<body>
    <div class="main">
        <?php
        include "../profile.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Product</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <form method="POST" class="full-form" enctype="multipart/form-data">
                    <h3>Update Product</h3>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-four">
                            <div class="form-grp-inner-sp">
                                <label>Product's Name</label>
                                <input type="text" name="name" value="<?php echo $name ?>" placeholder="Enter Name of Product">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Product's Price</label>
                                <input type="text" pattern="[0-9,.]+" min="0" value="<?php echo $price ?>" name="price" placeholder="Enter Price of Product" required="">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Discount If Available</label>
                                <input type="text" pattern="[0-9,.]+" min="0" value="<?php echo $discount ?>" name="dprice" placeholder="Enter New Price of Product" required="">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Quantity In Stock</label>
                                <input type="number" min="0" value="<?php echo $stock ?>" name="stock" placeholder="How Much In Stock?" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Tags</label>
                                <select name="tags" id="" required>
                                    <!-- <option selected hidden disabled>Choose Tag</option> -->
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_tags WHERE ID = $tags");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $id = $row['ID'];
                                        $name = $row['Tag_Name'];
                                    ?>
                                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php } ?>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_tags WHERE ID != $tags ");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $id = $row['ID'];
                                        $name = $row['Tag_Name'];
                                    ?>
                                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Categories</label>
                                <select name="categories" id="" required>
                                    <!-- <option selected hidden disabled>Choose Tag</option> -->
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_categories WHERE ID = $tags");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $id = $row['ID'];
                                        $name = $row['Category_Name'];
                                    ?>
                                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php } ?>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_categories WHERE ID != $tags ");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $id = $row['ID'];
                                        $name = $row['Category_Name'];
                                    ?>
                                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Brief Description</label>
                                <textarea name="brief" required placeholder="Enter Product Brief"><?php echo $brief ?></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Full Description</label>
                                <textarea name="description" required placeholder="Enter Product Description"><?php echo $descr ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="update" value="">Update Product</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>

</html>