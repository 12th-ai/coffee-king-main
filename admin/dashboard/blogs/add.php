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
    <title>Blog</title>
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
                <h2>Blog</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <form method="POST" class="full-form" enctype="multipart/form-data">
                    <h3>Add New In Blog</h3>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-three">
                            <div class="form-grp-inner-sp">
                                <label>Writer's Name</label>
                                <select name="name" required>
                                    <option selected hidden disabled value="">Writer's Name</option>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM team WHERE Position = 'Blog Writer'");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $journalistid = $row['ID'];
                                        $journalistname = $row['Names'];

                                    ?>
                                        <option value="<?php echo $journalistid ?>"><?php echo $journalistname ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Choose Main Image</label>
                                <input type="file" name="mainpic" required="">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Choose Other Image</label>
                                <input type="file" name="otherpic" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Title</label>
                                <textarea name="title" required placeholder="Enter Blog Title"></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Brief Summary</label>
                                <textarea name="summary" required placeholder="Enter Blog Preview Summary"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Header Text</label>
                                <textarea name="headtext" required placeholder="Enter Header Text"></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Body Text</label>
                                <textarea name="bodytext" required placeholder="Enter Body Text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in ">
                            <div class="form-grp-inner-sp">
                                <label>Footer Text</label>
                                <textarea name="footertext" required placeholder="Enter Footer Text"></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Quote Text</label>
                                <textarea name="quotetext" required placeholder="Enter Quote Text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="addBlog" value="">Add To Blog</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>
<?php
if (isset($_POST['addBlog'])) {
    $name = $_POST['name'];

    $pic = $_FILES['mainpic']['name'];
    $tmpname = $_FILES['mainpic']['tmp_name'];
    $path = "../../../ui/assets/blog/" . $pic;
    $mv = move_uploaded_file($tmpname, $path);

    $minipic = $_FILES['otherpic']['name'];
    $tmpmininame = $_FILES['otherpic']['tmp_name'];
    $directory = "../../../ui/assets/blog/" . $minipic;
    $mvmini = move_uploaded_file($tmpmininame, $directory);


    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $header = $_POST['headtext'];
    $body = $_POST['bodytext'];
    $footer = $_POST['footertext'];
    $quote = $_POST['quotetext'];
    $date = date('d/m/Y');
    $comment = 0;
    $views = 0;
    $journalistname = $_POST['name'];
    $sql = mysqli_query($conn, "INSERT INTO blog VALUES (NULL, '$pic', '$minipic', '$journalistname', '$title', '$summary','1', '$date', '$views', '$comment', '$header', '$body', '$quote', '$footer')");
    if ($mv && $mvmini && $sql) {
        echo "<script>alert('Blog Added Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Failed To Add Blog')</script>";
        die("" . mysqli_error($conn));
    }
}
?>

</html>