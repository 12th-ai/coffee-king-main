<?php
session_start();
include '../../../auth/connection.php';
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='../../../auth/'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../../f.css">
</head>
<?php
$id = $_GET['updateId'];
$query = "SELECT * FROM pro_categories WHERE ID = $id";
$runquery = mysqli_query($conn, $query);
$fetch = mysqli_fetch_assoc($runquery);
$name = $fetch['Category_Name'];

if (isset($_POST['update'])) {
    $name = $_POST['category'];
    // $sql = mysqli_query($conn, "UPDATE `pro_tag` SET Img_Name = '$name' WHERE ID = $id");
    // echo "<script>alert('Image Updated Successfully')</script>";
    // echo "<script>window.location.href = 'index.php'</script>";
    $query = mysqli_query($conn, "SELECT * FROM pro_categories WHERE Category_Name LIKE '$name%' AND Category_Name LIKE '%$name'");
    if (mysqli_num_rows($query) > 0) {
        echo "<script>alert('Sorry! Tag Already Exists')</script>";
    } else {
        $sql = mysqli_query($conn, "UPDATE `pro_categories` SET `Category_Name` = '$name' WHERE ID = $id");
        if ($sql) {
            echo "<script>alert('Category Updated Successfully')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Category Not Added')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
            die("" . mysqli_error($conn));
        }
    }
}
?>

<body>
    <div class="main">
        <?php
        include "../../profile_2.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Update Category</h2>
                <img src="../../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm update-btm">
                <form method="POST" enctype="multipart/form-data">
                    <div class="close" id="close">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30">
                            <path d="M7.9785156 5.9804688 A 2.0002 2.0002 0 0 0 6.5859375 9.4140625L12.171875 15L6.5859375 20.585938 A 2.0002 2.0002 0 1 0 9.4140625 23.414062L15 17.828125L20.585938 23.414062 A 2.0002 2.0002 0 1 0 23.414062 20.585938L17.828125 15L23.414062 9.4140625 A 2.0002 2.0002 0 0 0 21.960938 5.9804688 A 2.0002 2.0002 0 0 0 20.585938 6.5859375L15 12.171875L9.4140625 6.5859375 A 2.0002 2.0002 0 0 0 7.9785156 5.9804688 z" />
                        </svg>
                    </div>
                    <h3>Update Category</h3>
                    <div class="form-grp">
                        <div class="">
                            <div class="form-grp-inner-sp">
                                <label>Category Name</label>
                                <input type="text" name="category" value="<?php echo $name ?>" required="" placeholder="Enter Tag Name">
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="update" value="">Update Tag</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>

</html>