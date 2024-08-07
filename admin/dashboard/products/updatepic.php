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

    $pic = $_FILES['mainpic']['name'];
    $tmpname = $_FILES['mainpic']['tmp_name'];
    $path = "../../../ui/assets/products/" . $pic;
    $mv = move_uploaded_file($tmpname, $path);

    $minipic1 = $_FILES['subpic1']['name'];
    $tmpmininame1 = $_FILES['subpic1']['tmp_name'];
    $directory1 = "../../../ui/assets/products/" . $minipic1;
    $mvmini1 = move_uploaded_file($tmpmininame1, $directory1);

    $minipic2 = $_FILES['subpic2']['name'];
    $tmpmininame2 = $_FILES['subpic2']['tmp_name'];
    $directory2 = "../../../ui/assets/products/" . $minipic2;
    $mvmini2 = move_uploaded_file($tmpmininame2, $directory2);

    $sql = mysqli_query($conn, "UPDATE product SET Main_Preview = '$pic', Sub_Preview_1 = '$minipic1',Sub_Preview_2 = '$minipic2' WHERE ID = $id");
    if ($sql && $mv && $mvmini1 && $mvmini2) {
        echo "<script>alert('Product Images Updated Successfully')</script>";
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
                    <h3>Update Product Images</h3>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-three">
                            <div class="form-grp-inner-sp">
                                <label>Choose Main Image</label>
                                <input type="file" name="mainpic" required="" accept="image/*">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Choose Sub Image 1</label>
                                <input type="file" name="subpic1" required="" accept="image/*">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Choose Sub Image 2</label>
                                <input type="file" name="subpic2" required="" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="update" value="">Update Images</button>
                        <a href="./" id="open">Discard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>

</html>