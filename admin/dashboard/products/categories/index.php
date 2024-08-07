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

<body>
    <div class="main">
        <?php
        include "../../profile_2.php";
        ?>
        <div class="main-right">
            <div class="main-right-top">
                <h2>Categories</h2>
                <img src="../../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <button id="open">+ Add</button>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Products</th>
                        <th>Operations</th>
                    </tr>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM pro_categories ORDER BY ID DESC");
                    while ($galrow = mysqli_fetch_array($sql)) {
                        $id = $galrow['ID'];
                        $name = $galrow['Category_Name'];
                    ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td></td>
                            <td>
                                <a href='update.php?updateId="<?php echo $id ?>"'>Update</a>
                                <a href='delete.php?dropId="<?php echo $id ?>"'>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="abs" id="cover">
        <form method="POST" enctype="multipart/form-data">
            <div class="close" id="close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30">
                    <path d="M7.9785156 5.9804688 A 2.0002 2.0002 0 0 0 6.5859375 9.4140625L12.171875 15L6.5859375 20.585938 A 2.0002 2.0002 0 1 0 9.4140625 23.414062L15 17.828125L20.585938 23.414062 A 2.0002 2.0002 0 1 0 23.414062 20.585938L17.828125 15L23.414062 9.4140625 A 2.0002 2.0002 0 0 0 21.960938 5.9804688 A 2.0002 2.0002 0 0 0 20.585938 6.5859375L15 12.171875L9.4140625 6.5859375 A 2.0002 2.0002 0 0 0 7.9785156 5.9804688 z" />
                </svg>
            </div>
            <h3>Add New Category</h3>
            <div class="form-grp">
                <div class="">
                    <div class="form-grp-inner-sp">
                        <label>Category Name</label>
                        <input type="text" name="category" required="" placeholder="Enter Category Name">
                    </div>
                </div>
            </div>
            <div class="btns">
                <button type="submit" name="addCategory" value="">Add Category</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
    <script src="../../js/test.js"></script>
</body>
<?php
if (isset($_POST['addCategory'])) {
    $name = $_POST['category'];
    $query = mysqli_query($conn, "SELECT * FROM pro_categories WHERE Category_Name LIKE '$name%' AND Category_Name LIKE '%$name'");
    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('Sorry! Category Already Exists')</script>";
    }else{
        $sql = mysqli_query($conn, "INSERT INTO pro_categories VALUES (NULL, '$name')");
        if ( $sql) {
            echo "<script>alert('Category Added Successfully')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Category Not Added')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }
    }
}
?>

</html>