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
    <title>Team</title>
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
                <h2>Team</h2>
                <img src="../../../ui/assets/09/logo_black-9.png" alt="" class="logoImg">
                <a href='../../auth/handle.php?logout'>Log Out</a>
            </div>
            <div class="main-right-btm oth-right-btm">
                <form method="POST" class="full-form" enctype="multipart/form-data">
                    <h3>Add New In Team</h3>
                    <h3>If None, Leave Blank</h3>
                    <div class="form-grp">
                        <div class="form-grp-in">
                            <div class="form-grp-inner-sp">
                                <label>Name</label>
                                <input type="text" name="name" required="" placeholder="Enter Name">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Choose Image</label>
                                <input type="file" name="pic" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-four">
                            <div class="form-grp-inner-sp">
                                <label>Position</label>
                                <input type="text" name="pos" required="" placeholder="Enter Job Title">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Age</label>
                                <input type="number" name="age" min="18" required="" placeholder="Enter Age">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Experience</label>
                                <input type="number" name="experience" required="" placeholder="Years Of Experience">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Phone</label>
                                <input type="text" pattern="[0-9]+" name="phone" required="" placeholder="Enter Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-five">
                            <div class="form-grp-inner-sp">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>FB</label>
                                <input type="url" name="fb" placeholder="Paste In Facebook Link">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Twitter</label>
                                <input type="url" name="tl" placeholder="Paste In Twitter Link">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>IG</label>
                                <input type="url" name="ig" placeholder="Paste In Instagram Link">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>LinkedIn</label>
                                <input type="url" name="ln" placeholder="Paste In Linked-In Link">
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-three">
                            <div class="form-grp-inner-sp">
                                <label>About</label>
                                <textarea name="about" placeholder="Write Brief About" required></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Coffe Making</label>
                                <textarea name="cmaking" placeholder="Write Brief About Coffee Making" required></textarea>
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Coffe Waiter</label>
                                <textarea name="cwaiter" placeholder="Write Brief About Coffee Waiter" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-grp">
                        <div class="form-grp-in form-grp-three">
                            <div class="form-grp-inner-sp">
                                <label>Caffee Waiter Skill</label>
                                <input type="number" min="0" name="cwaiterskill" required="" placeholder="Skill Rate(Number)">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Caffee Making Skill</label>
                                <input type="number" name="cmakingskill" min="0" required="" placeholder="Skill Rate(Number)">
                            </div>
                            <div class="form-grp-inner-sp">
                                <label>Barista Skill</label>
                                <input type="number" name="baristaskill" min="0" required="" placeholder="Skill Rate(Number)">
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" name="addTeam" value="">Add To Team</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/test.js"></script>
</body>
<?php
if (isset($_POST['addTeam'])) {
    $name = $_POST['name'];
    $pic = $_FILES['pic']['name'];
    $tmpname = $_FILES['pic']['tmp_name'];
    $path = "../../../ui/assets/team/" . $pic;
    $mv = move_uploaded_file($tmpname, $path);
    $title = $_POST['pos'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fb = $_POST['fb'];
    if ($fb == '') {
        $fb = "#";
    }
    $tl = $_POST['tl'];
    if ($tl == '') {
        $tl = "#";
    }
    $ig = $_POST['ig'];
    if ($ig == '') {
        $ig = "#";
    }
    $linkedin = $_POST['ln'];
    if ($linkedin == '') {
        $linkedin = "#";
    }
    $about = $_POST['about'];
    $expmaking = $_POST['cmaking'];
    $expwaiter = $_POST['cwaiter'];
    $skillwaiter = $_POST['cwaiterskill'];
    $skillmaking = $_POST['cmakingskill'];
    $skillbarista = $_POST['baristaskill'];
    $sql = mysqli_query($conn, "INSERT INTO team VALUES(NULL,'$name', '$pic', '$title','$age', '$experience', '$phone', '$email', '$fb', '$tl', '$ig', '$linkedin', '$about', '$expmaking', '$expwaiter', '$skillwaiter', '$skillmaking', '$skillbarista')");
    if ($mv && $sql) {
        echo "<script>alert('Added In Team Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Failed To Add In Team')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
}
?>

</html>