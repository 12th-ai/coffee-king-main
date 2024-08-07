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
                <div class="top-btns">
                    <a href="./add.php" id="open">+ Add</a>
                    <a href="./" id="open">
                        All
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM blog"));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                    <a href="./?active" id="open">
                        Active
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM blog WHERE `Status` = 1"));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                    <a href="./?archived" id="open">
                        Archived
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM blog WHERE `Status` = 0"));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                    <a href="./comments.php" id="open">
                        Comments
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM comments "));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                    <a href="./replies.php" id="open">
                        Replies
                        <?php
                        $qq = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM replies "));
                        echo '(' . $qq . ')';
                        ?>
                    </a>
                </div>
                <div class="oth-right-btm-table">
                    <table>
                        <th colspan="20">Scroll Horizontally For More Info</th>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Preview Summary</th>
                            <th>Main Image</th>
                            <th>Mini Image</th>
                            <th>By</th>
                            <th>Date</th>
                            <th>Views</th>
                            <th>Comments</th>
                            <th>Header Text</th>
                            <th>Body Text</th>
                            <th>Quote</th>
                            <th>Footer Text</th>
                            <th>Operations</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM blog ORDER BY ID DESC");
                        if (isset($_GET['archived'])) {
                            $sql = mysqli_query($conn, "SELECT * FROM blog WHERE `Status` = 0 ");
                        } else if (isset($_GET['active'])) {
                            $sql = mysqli_query($conn, "SELECT * FROM blog WHERE `Status` = 1 ");
                        }
                        while ($galrow = mysqli_fetch_array($sql)) {
                            $id = $galrow['ID'];
                            $pic = $galrow['Img_Name'];
                            $minipic = $galrow['Small_Img'];
                            $writer = $galrow['Journalist'];
                            $title = $galrow['Title'];
                            $summary = $galrow['Summary'];
                            $date = $galrow['Date'];
                            $views = $galrow['Views'];
                            $status = $galrow['Status'];
                            $comments = $galrow['Comments'];
                            $head = $galrow['HeadText'];
                            $body = $galrow['BodyText'];
                            $spword = $galrow['Sp_Word'];
                            $footer = $galrow['FooterText'];
                            $query = mysqli_query($conn, "SELECT * FROM team WHERE ID = $writer");
                            $teamrow = mysqli_fetch_array($query);
                            $names = $teamrow['Names'];
                        ?>
                            <tr>
                                <div class="tr">
                                </div>
                                <td><?php echo $id ?></td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $title ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space td-txt">
                                        <?php echo $summary ?>
                                    </div>
                                </td>
                                <td>
                                    <img src="../../../ui/assets/blog/<?php echo $pic ?>" alt="">
                                </td>
                                <td>
                                    <img src="../../../ui/assets/blog/<?php echo $minipic ?>" alt="">
                                </td>
                                <td>
                                    <div class="td-txt-space">
                                        <?php echo $names ?>
                                    </div>
                                </td>
                                <td><?php echo $date ?></td>
                                <td><?php echo $views ?></td>
                                <td><?php echo $comments ?></td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $head ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $body ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $spword ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt">
                                        <?php echo $footer ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="td-txt-space td-txt-wide-space">
                                        <a href='update.php?updateId="<?php echo $id ?>"'>Update</a>
                                        <?php if ($status == 1) { ?>
                                            <a href='delete.php?archiveId="<?php echo $id ?>"'>Archive</a>
                                        <?php } elseif ($status == 0) { ?>
                                            <a href='delete.php?UnarchiveId="<?php echo $id ?>"'>UnArchive</a>
                                        <?php } ?>
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