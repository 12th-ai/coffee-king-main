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
    <title>Team </title>
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
                <a href="./add.php" id="open">+ Add</a>
                <div class="oth-right-btm-table">
                    <table>
                        <th colspan="20">Scroll Horizontally For More Info</th>
                        <tr>
                            <th>#</th>
                            <th>Names</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Age</th>
                            <th>Experience</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>IG</th>
                            <th>Linked In</th>
                            <th>About</th>
                            <th>Coffee Making Experience</th>
                            <th>Cafe Waiter Experience</th>
                            <th>Cafe Waiter Skill</th>
                            <th>Coffee Maker Skill</th>
                            <th>Barista Skill</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM team");
                        while ($galrow = mysqli_fetch_array($sql)) {
                            $id = $galrow['ID'];
                            $name = $galrow['Names'];
                            $pic = $galrow['Img_Name'];
                            $position = $galrow['Position'];
                            $age = $galrow['Age'];
                            $experience = $galrow['Experience'];
                            $phone = $galrow['Phone_Number'];
                            $email = $galrow['Email'];
                            $fb = $galrow['Facebook_Link'];
                            $tl = $galrow['Twitter_Link'];
                            $ig = $galrow['IG_Link'];
                            $linkedin = $galrow['Linked_In_Link'];
                            $about = $galrow['About'];
                            $makingexp = $galrow['Coffee_Making_Experience'];
                            $waiterexp = $galrow['Cafe_Waiter_Experience'];
                            $waiterskill = $galrow['Cafe_Waiter_Skill'];
                            $makerskill = $galrow['Coffee_Maker_Skill'];
                            $baristaskill = $galrow['Barista_Skill'];
                        ?>
                            <tr>
                                <div class="tr">
                                    <td><?php echo $id ?></td>
                                    <td>
                                        <div class="td-txt-space">
                                            <?php echo $name ?>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="../../../ui/assets/team/<?php echo $pic ?>" alt="">
                                    </td>
                                    <td><?php echo $position ?></td>
                                    <td><?php echo $age ?></td>
                                    <td><?php echo $experience ?></td>
                                    <td><?php echo $phone ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $fb ?></td>
                                    <td><?php echo $tl ?></td>
                                    <td><?php echo $ig ?></td>
                                    <td><?php echo $linkedin ?></td>
                                    <td>
                                        <div class="td-txt">
                                            <?php echo $about ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-txt">
                                            <?php echo $makingexp ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-txt">
                                            <?php echo $waiterexp ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-txt-full">
                                            <?php echo $waiterskill ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-txt-full">
                                            <?php echo $makerskill ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-txt-full">
                                            <?php echo $baristaskill ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a href='update.php?updateId="<?php echo $id ?>"'>Update</a>
                                        <a href='delete.php?dropId="<?php echo $id ?>"'>Delete</a>
                                    </td>
                                </div>
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