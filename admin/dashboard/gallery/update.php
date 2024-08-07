<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include '../../auth/connection.php';
    if (!isset($_SESSION['login'])) {
        echo "<script>window.location.href='../../auth/'</script>";
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../f.css">
</head>
<?php
$id = $_GET['updateId'];
$query = "SELECT * FROM gallery WHERE ID = $id";
$runquery = mysqli_query($conn, $query);
$fetch = mysqli_fetch_assoc($runquery);
$name = $fetch['Img_Name'];

if (isset($_POST['update'])) {
    $name = $_FILES['pic']['name'];
    $tmpname = $_FILES['pic']['tmp_name'];
    $path = "../../../ui/assets/gallery/" . $name;
    $mv = move_uploaded_file($tmpname, $path);
    $sql = mysqli_query($conn, "UPDATE `gallery` SET Img_Name = '$name' WHERE ID = $id");
    echo "<script>alert('Image Updated Successfully')</script>";
    echo "<script>window.location.href = 'index.php'</script>";
}
?>

<body>
    <div class="main">
        <?php 
            include "../profile.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Update Image</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm update-btm">
                <form method="POST" enctype="multipart/form-data">
                    <div class="prev-img">
                        <h3>Former Image Preview</h3>
                        <img src="../../../ui/assets/gallery/<?php echo $name ?>" alt="" class="gallery-up-preview">
                    </div>
                    <div class="form-grp">
                        <div class="">
                            <div class="form-grp-inner-sp">
                                <label>Choose New Image</label>
                                <input type="file" name="pic" required>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="update" value="">Update Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>

</html>