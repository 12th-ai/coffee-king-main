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
    <!-- <link rel="stylesheet" href="../style.css"> -->
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
                <form method="POST" class="full-form" enctype="multipart/form-data">
                    <h3>Add New Product</h3>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-three">
                            <div class="form-grp-inner-sp">
                                <label>Product's Name</label>
                                <input type="text" name="name" placeholder="Enter Name of Product">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Product's Price</label>
                                <input type="text" pattern="[0-9,.]+"  min="0" name="price" placeholder="Enter Price of Product" required="">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Quantity In Stock</label>
                                <input type="number" min="0" name="stock" placeholder="How Much In Stock?" required="">
                            </div>
                        </div>
                    </div>
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
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Tags</label>
                                <select name="tags" id="" required>
                                    <option selected hidden disabled>Choose Tag</option>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_tags ORDER BY ID DESC");
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
                                <select name="categories" id="">
                                    <option selected hidden disabled>Choose Category</option>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM pro_categories ORDER BY ID DESC");
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
                                <textarea name="brief" required placeholder="Enter Product Brief"></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Full Description</label>
                                <textarea name="description" required placeholder="Enter Product Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="addProduct" value="">Add Product</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>
<?php
if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

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

    $tags = $_POST['tags'];

    $categories = $_POST['categories'];

    $brief = $_POST['brief'];
    $descr = $_POST['description'];
    $comment = 0;
    $sql = mysqli_query($conn, "INSERT INTO product VALUES (NULL, '$name', '$price', '$price', '$brief', '$stock','$categories','$tags', '$pic', '$minipic1', '$minipic2', '$descr', '$comment')");
    if ($mv && $mvmini1 && $mvmini2 && $sql) {
        echo "<script>alert('Product Added Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Failed To Add Product')</script>";
        die("" . mysqli_error($conn));
    }
}
?>

</html>