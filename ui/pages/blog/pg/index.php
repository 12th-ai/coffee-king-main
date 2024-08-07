<!DOCTYPE html>
<html lang="en">

<?php
include "../../../../admin/auth/connection.php";
if (isset($_GET['blog'])) {
    $id = $_GET['blog'];
    $postid = $_GET['blog'];
    $sql = mysqli_query($conn, "SELECT * FROM blog WHERE ID = $postid AND `Status` = 1");
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_array($sql)) {
            $title = $row['Title'];
            $pic = $row['Img_Name'];
            $minipic = $row['Small_Img'];
            $journalist = $row['Journalist'];
            $date = $row['Date'];
            $views = $row['Views'];
            $procomment = $row['Comments'];
            $head = $row['HeadText'];
            $body = $row['BodyText'];
            $quote = $row['Sp_Word'];
            $footer = $row['FooterText'];
            $get = mysqli_query($conn, "SELECT * FROM team WHERE ID = $journalist");
            $fetch = mysqli_fetch_array($get);
            $writer = $fetch['Names'];
            $newview = $views + 1;
        }
        $query = mysqli_query($conn, "UPDATE blog SET Views = '$newview' WHERE ID = $postid");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee-King || <?php if (!isset($_GET['blog']) || mysqli_num_rows($sql) == 0) {
                                echo "Error";
                            } else {
                                echo $title;
                            } ?>
    </title>
    <link rel="shortcut icon" href="../../../assets/09/cropped-favicon-100x100.png" type="image/x-icon">
    <?php if (!isset($_GET['blog']) || mysqli_num_rows($sql) == 0) { ?>
        <link rel="stylesheet" href="../../../css/404/main.css">
    <?php } ?>
    <link rel="stylesheet" href="../../../css/article/main.css">
</head>

<body>
    <header id="mainHeader" class="header">
        <div class="header-cont container">
            <a href="../../../../" class="logo">
                <img src="../../../assets/09/logo_black-9.png" alt="">
            </a>
            <nav id="navMenu">
                <div class="nav-close" id="nav-closing">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                        <path d="M15.125 12.28125L12.28125 15.125L22.21875 25L12.28125 34.875L15.125 37.71875L25.0625 27.84375L35 37.71875L37.8125 34.875L27.90625 25L37.8125 15.125L35 12.28125L25.0625 22.15625Z" />
                    </svg>
                </div>
                <a href="../../../../">Home</a>
                <div class="dropdown">
                    <button>About Us</button>
                    <div class="dropdown-cnt ab-drop" id="nav">
                        <a href="../../about/about/">About Us</a>
                        <a href="../../about/delivery/">Delivery</a>
                        <a href="../../about/events/">Events</a>
                        <a href="../../about/offers/">Special Offers</a>
                        <a href="../../about/testimonial/">Testimonials</a>
                        <a href="../../about/team/">Team</a>
                        <a href="../../about/faq/">FAQ</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button>Explore</button>
                    <div class="dropdown-cnt prod-drop" id="nav2">
                        <a href="../../explore/shop/">Shop</a>
                        <a href="../../explore/cart/">Cart</a>
                        <a href="../../explore/checkout/">Checkout</a>
                        <a href="../../explore/account/signin/">My Account</a>
                    </div>
                </div>
                <a href="../../blog/">Blog</a>
                <a href="../../gallery/">Gallery</a>
                <a href="../../contact/">Contact</a>
            </nav>
            <div class="header-next">
                <a href="../../explore/cart/" class="header-next-cart">
                    <div class="header-next-number">
                        0
                    </div>
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path d="M70 4818 c-92 -62 -90 -182 4 -252 26 -20 42 -21 351 -24 289 -3 324
                            -5 338 -20 11 -12 629 -2276 692 -2534 7 -26 5 -28 -23 -28 -47 0 -147 -35
                            -201 -69 -310 -199 -284 -650 47 -814 l85 -42 165 -3 c187 -4 169 8 138 -102
                            -32 -111 -16 -249 42 -368 36 -76 150 -190 223 -226 170 -82 357 -75 514 19
                            109 66 185 160 226 282 38 111 31 265 -17 381 -5 9 93 12 466 12 l472 0 -7
                            -22 c-28 -91 -36 -133 -36 -208 0 -145 50 -266 153 -368 101 -102 223 -152
                            368 -152 237 0 438 152 505 383 28 97 20 245 -19 337 -14 34 -13 35 15 52 96
                            59 90 202 -11 255 l-43 23 -1539 0 c-1511 0 -1539 0 -1577 20 -114 57 -112
                            239 2 293 32 16 158 17 1515 17 959 0 1498 4 1533 10 115 22 219 101 268 205
                            12 26 108 419 213 873 209 910 205 882 153 987 -28 59 -73 103 -138 137 -42
                            23 -46 23 -592 29 -302 4 -1061 8 -1685 9 -624 1 -1200 5 -1280 9 l-145 6 -91
                            337 c-49 185 -99 355 -109 379 -28 60 -105 135 -172 167 l-58 27 -355 3 -356
                            3 -34 -23z m1704 -1208 l232 0 42 -322 c23 -178 42 -331 42 -340 0 -17 -20
                            -18 -288 -18 l-288 0 -88 323 c-48 178 -90 334 -93 347 l-6 23 108 -6 c59 -4
                            212 -7 339 -7z m1196 -340 l0 -340 -285 0 -284 0 -6 33 c-5 32 -85 631 -85
                            642 0 3 149 5 330 5 l330 0 0 -340z m960 323 c-1 -10 -20 -162 -43 -338 l-43
                            -320 -287 -3 -287 -2 0 340 0 340 330 0 c308 0 330 -1 330 -17z m885 -15 c-3
                            -13 -37 -160 -75 -327 -39 -167 -73 -307 -76 -312 -3 -5 -120 -9 -260 -9 -196
                            0 -254 3 -254 13 0 6 19 157 42 335 l42 322 293 0 293 0 -5 -22z m-2637 -1265
                            c23 -175 42 -326 42 -335 0 -17 -16 -18 -194 -18 -107 0 -206 4 -220 10 -15 5
                            -33 24 -41 42 -14 32 -165 586 -165 607 0 8 81 11 268 11 l268 0 42 -317z
                            m792 -18 l0 -335 -220 0 -220 0 -4 23 c-5 21 -86 628 -86 641 0 3 119 6 265 6
                            l265 0 0 -335z m830 320 c0 -23 -80 -628 -85 -642 -3 -10 -57 -13 -225 -13
                            l-220 0 0 335 0 335 265 0 c231 0 265 -2 265 -15z m790 2 c0 -21 -129 -579
                            -141 -608 -6 -15 -22 -31 -35 -38 -28 -12 -394 -16 -394 -4 0 16 82 639 85
                            651 6 18 485 18 485 -1z m-2310 -1620 c132 -67 157 -253 47 -355 -54 -49 -102
                            -65 -178 -60 -79 6 -134 43 -171 117 -102 200 100 399 302 298z m1845 22 c92
                            -23 166 -118 166 -214 0 -130 -92 -224 -219 -225 -131 0 -221 91 -222 223 0
                            71 24 121 81 170 59 51 118 65 194 46z" />
                        </g>
                    </svg>
                </a>
                <div class="menu-btn" id="menuOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                        <path d="M10 2C8.7068414 2 7.6048587 2.84267 7.1875 4L2 4L2 6L7.1875 6C7.6048587 7.15733 8.7068414 8 10 8C11.64501 8 13 6.6450096 13 5C13 3.3549904 11.64501 2 10 2 z M 10 4C10.564129 4 11 4.4358706 11 5C11 5.5641294 10.564129 6 10 6C9.4358706 6 9 5.5641294 9 5C9 4.4358706 9.4358706 4 10 4 z M 15 4L15 6L22 6L22 4L15 4 z M 15 9C13.706841 9 12.604859 9.8426699 12.1875 11L2 11L2 13L12.1875 13C12.604859 14.15733 13.706841 15 15 15C16.64501 15 18 13.64501 18 12C18 10.35499 16.64501 9 15 9 z M 15 11C15.564129 11 16 11.435871 16 12C16 12.564129 15.564129 13 15 13C14.435871 13 14 12.564129 14 12C14 11.435871 14.435871 11 15 11 z M 20 11L20 13L22 13L22 11L20 11 z M 7 16C5.7068414 16 4.6048587 16.84267 4.1875 18L2 18L2 20L4.1875 20C4.6048587 21.15733 5.7068414 22 7 22C8.6450096 22 10 20.64501 10 19C10 17.35499 8.6450096 16 7 16 z M 7 18C7.5641294 18 8 18.435871 8 19C8 19.564129 7.5641294 20 7 20C6.4358706 20 6 19.564129 6 19C6 18.435871 6.4358706 18 7 18 z M 12 18L12 20L22 20L22 18L12 18 z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <?php

    if (!isset($_GET['blog']) || mysqli_num_rows($sql) == 0 || isset($_GET['error'])) {
        $sql = mysqli_query($conn, "SELECT * FROM errorimg WHERE ID  = 1");
        while ($row = mysqli_fetch_array($sql)) {
            $img = $row['img_name'];
        }
        $path = "../../../assets/gallery/" . $img;
        include "../../../404.php";
    } else { ?>
        <div class="home-mini">
            <div class="home-mini-cont container">
                <h1><?php echo $title ?></h1>
                <div class="home-mini-links">
                    <a href="../../../../" class="activeHomeMini">Coffeking</a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                        <path d="M11.414063 3.585938L8.585938 6.414063L15.171875 13L8.585938 19.585938L11.414063 22.414063L20.828125 13Z" />
                    </svg>
                    <a href="../../blog/" class="activeHomeMini">Blog</a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                        <path d="M11.414063 3.585938L8.585938 6.414063L15.171875 13L8.585938 19.585938L11.414063 22.414063L20.828125 13Z" />
                    </svg>
                    <p><?php echo $title ?></p>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-cont container beforeFooter">
                <div class="main-cont-cnt">
                    <div class="main-cont-first">
                        <div class="main-cont-img">
                            <img src="../../../assets/blog/<?php echo $pic ?>" alt="">
                            <hr>
                            <div class="blog-info">
                                <div class="blog-info-part">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                            <path d="M26.273438 4.445313C26.148438 4.457031 26.027344 4.476563 25.902344 4.5C24.902344 4.699219 23.800781 5.5 22.800781 6.5L27.597656 9.5C28.199219 7.5 28.601563 5.5 27.300781 4.699219C27 4.472656 26.644531 4.417969 26.273438 4.445313 Z M 21.402344 8C20.199219 9.5 17.5 13 14.699219 17.402344C13.800781 18.800781 12.898438 20.402344 12 21.902344C12 22.800781 11.902344 23.601563 11.800781 24.402344C11.5 26.300781 11 27.898438 10.699219 28.5C10.300781 29.601563 9.699219 30.398438 9.101563 31L12.902344 33.402344C13.5 32.601563 14.5 31.199219 15.699219 29.597656L15.097656 29.199219C12.800781 28 11.699219 25.300781 12.597656 22.800781C13.300781 20.800781 15.300781 19.5 17.402344 19.5C17.800781 19.5 18.199219 19.597656 18.699219 19.699219L21.800781 20.5C24.199219 16.5 26 12.898438 26.800781 11.199219 Z M 16.902344 10.800781L10 11.800781C9.300781 11.902344 8.800781 12.300781 8.5 12.902344L2.898438 25.5C2.699219 26 2.5 26.699219 2.601563 27.300781C2.699219 28.402344 3.199219 29.398438 4 30.097656C5.101563 30.800781 6.398438 30.601563 7 30.300781C8.398438 29.699219 8.898438 27.800781 9 27.300781C9.300781 26.199219 10.300781 23.199219 9.898438 20.300781L10.800781 20.199219C11.5 18.898438 12.300781 17.699219 13 16.5C14.398438 14.300781 15.699219 12.402344 16.902344 10.800781 Z M 28.5 12.597656C27.800781 14.097656 26.101563 17.5 23.800781 21.300781L26.402344 22L28.402344 22.597656L27.300781 24.199219L18.199219 21.800781C16.699219 21.402344 15.101563 22.199219 14.5 23.699219C13.898438 25.199219 14.601563 26.898438 16 27.597656L27.402344 34C29.101563 34.898438 31 35.199219 32.902344 34.902344C33.101563 34.902344 40.902344 33.097656 40.902344 33.097656L38.800781 18.902344L28.800781 12.699219C28.699219 12.597656 28.601563 12.597656 28.5 12.597656 Z M 45.300781 17.402344L40.699219 18.097656L43.402344 35.699219L48 35 Z M 6.898438 32.097656C5.800781 35.199219 5.800781 37.199219 5.800781 38L5.101563 39C4.898438 39.300781 5 39.699219 5.300781 39.902344C5.5 40 5.601563 40 5.800781 40C6 39.898438 6.101563 39.800781 6.300781 39.699219L6.898438 38.699219C7.601563 38.398438 9.398438 37.5 11.699219 35.097656Z" />
                                        </svg>
                                        <a href='../?author="<?php echo $journalist ?>"'><?php echo $writer ?></a>
                                    </p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                                            <path d="M5 0L5 4L7 4L7 0 Z M 17 0L17 4L19 4L19 0 Z M 1 3C0.449219 3 0 3.449219 0 4L0 7C0 7.550781 0.449219 8 1 8L1 24L23 24L23 8C23.550781 8 24 7.550781 24 7L24 4C24 3.449219 23.550781 3 23 3L20 3L20 5L16 5L16 3L8 3L8 5L4 5L4 3 Z M 3 8L21 8L21 22L3 22 Z M 5 10L5 12L7 12L7 10 Z M 9 10L9 12L11 12L11 10 Z M 13 10L13 12L15 12L15 10 Z M 17 10L17 12L19 12L19 10 Z M 5 14L5 16L7 16L7 14 Z M 9 14L9 16L11 16L11 14 Z M 13 14L13 16L15 16L15 14 Z M 17 14L17 16L19 16L19 14 Z M 5 18L5 20L7 20L7 18 Z M 9 18L9 20L11 20L11 18 Z M 13 18L13 20L15 20L15 18 Z M 17 18L17 20L19 20L19 18Z" />
                                        </svg>
                                        <a href='../?date=<?php echo $date ?>'><?php echo $date ?></a>
                                    </p>
                                </div>
                                <div class="blog-info-part">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" />
                                        </svg>
                                        <?php echo $newview ?> Views
                                    </p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z" />
                                        </svg>
                                        <a href="#comment"><?php echo $procomment ?> Comments</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p><?php echo $head ?></p>
                        <p><?php echo $body ?></p>
                        <div class="reference">
                            <hr>
                            <h2><?php echo $quote ?></h2>
                        </div>
                        <p class="floatAlign">
                            <img src="../../..//assets/blog/<?php echo $minipic ?>" alt="">
                            <?php echo $footer ?>
                        </p>

                    </div>
                    <a href="../" class="more more-black">
                        Read More News
                    </a>
                    <div class="comment" id="comment">
                        <h2>Leave A Comment</h2>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-crd">
                                <label>Select Avatar Image</label>
                                <input type="file" name="commentpic" accept="image/*" required>
                            </div>
                            <div class="form-crd">
                                <input type="text" name="commentname" placeholder="Enter Your Names*" required>
                            </div>
                            <div class="form-crd">
                                <input type="email" name="commentemail" placeholder="Enter Email* (Email Won't Be Published)" required>
                            </div>
                            <div class="form-crd">
                                <textarea name="comment" placeholder="Enter Your Comment*" required></textarea>
                            </div>
                            <div class="form-crd">
                                <button type="submit" name="addComment" class="more more-btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                    <div class="comments">
                        <h2>
                            Comments
                        </h2>
                        <div class="comment-cards">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM comments WHERE PostID = $postid ORDER BY ID DESC");
                            if (mysqli_num_rows($query) <= 0) { ?>
                                <div class="comment-crd">
                                    <p>Be The First To Comment...</p>
                                </div>
                            <?php } else { ?>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['ID'];
                                    $name = $row['Name'];
                                    $img = $row['Img_Name'];
                                    $email = $row['Email'];
                                    $comment = $row['Comment'];
                                    $commentid = $row['ID'];
                                    $commentdate = $row['Date'];
                                ?>
                                    <div class="comment-crd" id="<?php echo $commentid ?>">
                                        <div class="comment-img">
                                            <img src="../../../assets/blog/pg/<?php echo $img ?>" alt="">
                                        </div>
                                        <p class="cmntName"><?php echo $name ?> <span>(<?php echo $commentdate ?>)</span></p>
                                        <h3 class="main-h3">
                                            <?php echo $comment ?>
                                            <button class="reply-btn">
                                                Reply
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path d="M136.3 226.2l176 151.1c15.38 13.3 39.69 2.545 39.69-18.16V275.1c108.5 12.58 151.1 58.79 112.6 181.9c-5.031 16.09 14.41 28.56 28.06 18.62c43.75-31.81 83.34-92.69 83.34-154.1c0-131.3-94.86-173.2-224-183.5V56.02c0-20.67-24.28-31.46-39.69-18.16L136.3 189.9C125.2 199.4 125.2 216.6 136.3 226.2zM8.31 226.2l176 151.1c15.38 13.3 39.69 2.545 39.69-18.16v-15.83L66.33 208l157.7-136.2V56.02c0-20.67-24.28-31.46-39.69-18.16l-176 151.1C-2.77 199.4-2.77 216.6 8.31 226.2z" />
                                                </svg>
                                            </button>
                                            <form class="replyForm" method="POST" enctype="multipart/form-data">
                                                <div class="form-crd">
                                                    <label>Select Avatar Image</label>
                                                    <input type="file" name="replycommentpic" accept="image/*">
                                                </div>
                                                <div class="form-crd">
                                                    <input type="text" name="replycommentname" placeholder="Enter Your Names">
                                                </div>
                                                <div class="form-crd">
                                                    <input type="email" name="replyemail" placeholder="Enter Email (Email Won't Be Published)">
                                                </div>
                                                <div class="form-crd">
                                                    <textarea name="replycomment" placeholder="Reply To : <?php echo $name ?>"></textarea>
                                                </div>
                                                <div class="form-crd" style="display: none;">
                                                    <input type="text" name="replycommentid" value=" <?php echo $commentid ?>" readonly></input>
                                                </div>
                                                <div class="form-crd">
                                                    <button type="submit" name="subReply" class="more more-btn">Post Reply</button>
                                                </div>
                                            </form>
                                            <button class="open-reply-btn">
                                                <?php
                                                $replyNum = mysqli_query($conn, "SELECT * FROM replies WHERE PostID = $postid AND CommentID = $commentid");
                                                echo "View " . mysqli_num_rows($replyNum) ?> Replies
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                                                    <path d="M6.414063 7.585938L3.585938 10.414063L13 19.828125L22.414063 10.414063L19.585938 7.585938L13 14.171875Z" />
                                                </svg>
                                            </button>
                                            <div class="reply-section">
                                                <?php
                                                $sqli = mysqli_query($conn, "SELECT * FROM replies WHERE PostID = $postid AND CommentID = $commentid ORDER BY ID DESC");
                                                if (mysqli_num_rows($sqli) > 0) {
                                                    while ($replyrow = mysqli_fetch_array($sqli)) {
                                                        $replyname = $replyrow['Name'];
                                                        $replyimg = $replyrow['Img_Name'];
                                                        $replycomment = $replyrow['Reply'];
                                                        $replydate = $replyrow['Date'];
                                                ?>
                                                        <div class="comment-crd-rep">
                                                            <div class="comment-img">
                                                                <img src="../../../assets/blog/reply/<?php echo $replyimg ?>" alt="">
                                                            </div>
                                                            <p><?php echo $replyname ?><span>(<?php echo $replydate ?>)</span></p>
                                                            <h3><?php echo $replycomment ?></h3>
                                                        </div>
                                                    <?php }
                                                } else { ?>
                                                    <p>No Replies</p>
                                                <?php } ?>
                                            </div>
                                        </h3>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-cont container">
                <div class="footer-cont-first">
                    <div class="footer-cont-first-logo">
                        <img src="../../..//assets/09/logo_white-7.png" alt="">
                    </div>
                    <p>Pellentesque congue non augue vitae pellentesque. Morbi sollicitudin eleifend rhoncus. Mauris vel nisl a massa viverra sollicitudin semper a diam.</p>
                    <a href="../../soon/" class="more">Check It Out</a>
                </div>

                <div class="footer-cont-scnd footer-crds">
                    <h1>Explore</h1>
                    <div class="footer-cont-scnd-blw">
                        <a href="../../../../">Home</a>
                        <a href="../../blog/">Blog</a>
                        <a href="../../contact/">Contact Us</a>
                        <a href="../../about/about/">About Us</a>
                        <a href="../../explore/shop/">Shop</a>
                        <a href="../../gallery/">Gallery</a>
                    </div>
                </div>

                <div class="footer-cont-thrd footer-crds">
                    <h1>Contact Us</h1>
                    <div class="footer-cont-thrd-blw">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" />
                            </svg>
                            44 Danwers, NY City, USA, 70-102
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
                            </svg>
                            +10800-33-800; +10500-55-900
                        </p>

                        <a href="mailto:mycoffee@mycoffeeshop.rw">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                            </svg>
                            mycoffee@mycoffeeshop.rw
                        </a>

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z" />
                            </svg>
                            mycoffeeshop
                        </a>
                    </div>
                </div>


                <div class="blog-cont-abs">
                    <div class="blog-cont-abs-frst">
                        <h1>Subscribe</h1>
                        <h1>
                            <span>Weekly Newsletter</span>
                        </h1>
                    </div>
                    <form action="">
                        <input type="email" placeholder="Your Email Address" required>
                        <button>Subscribe</button>
                    </form>

                    <div class="blog-cont-abs-socials">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                        </a>

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>

                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M16.09375 4C11.01675 4 6 7.3833281 6 12.861328C6 16.344328 7.9584844 18.324219 9.1464844 18.324219C9.6364844 18.324219 9.9199219 16.958266 9.9199219 16.572266C9.9199219 16.112266 8.7460938 15.131797 8.7460938 13.216797C8.7460938 9.2387969 11.774359 6.4199219 15.693359 6.4199219C19.063359 6.4199219 21.556641 8.3335625 21.556641 11.851562C21.556641 14.478563 20.501891 19.40625 17.087891 19.40625C15.855891 19.40625 14.802734 18.516234 14.802734 17.240234C14.802734 15.370234 16 13.558906 16 11.628906C16 8.3529063 11.462891 8.94725 11.462891 12.90625C11.462891 13.73725 11.5665 14.657063 11.9375 15.414062C11.2555 18.353063 10 23.037406 10 26.066406C10 27.001406 10.133656 27.921422 10.222656 28.857422C10.390656 29.045422 10.307453 29.025641 10.564453 28.931641C13.058453 25.517641 12.827078 24.544172 13.955078 20.076172C14.564078 21.234172 16.137766 21.857422 17.384766 21.857422C22.639766 21.857422 25 16.736141 25 12.119141C25 7.2061406 20.75475 4 16.09375 4 z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['addComment'])) {
            $name = $_POST['commentname'];
            $email = $_POST['commentemail'];
            // $postid = $id;

            $img = $_FILES['commentpic']['name'];
            $tmpimg = $_FILES['commentpic']['tmp_name'];
            $path = "../../../assets/blog/pg/" . $img;
            $move = move_uploaded_file($tmpimg, $path);
            $commentnum = $procomment + 1;
            $date = date('l, d-m-Y H:i');
            $ogN = mysqli_real_escape_string($conn,$img);

            $comment = $_POST['comment'];
            $sql = mysqli_query($conn, "INSERT INTO comments VALUES(NULL,'$name','$ogN','$date', '$email', '$comment', '$postid')");
            $que = mysqli_query($conn, "UPDATE blog SET Comments = '$commentnum' WHERE ID = $postid");
            if ($sql && $move) {
                echo "<script>alert('Thanks For Your Comment')</script>";
                echo "<script>window.location.href = 'index.php?blog=$postid'</script>";
            }
        }
        if (isset($_POST['subReply'])) {
            $commentid = $_POST['replycommentid'];
            $comment = $_POST['replycomment'];
            $email = $_POST['replyemail'];
            $name = $_POST['replycommentname'];
            $pic = $_FILES['replycommentpic']['name'];
            $temppic = $_FILES['replycommentpic']['tmp_name'];
            $path = "../../../assets/blog/reply/" . $pic;
            $move = move_uploaded_file($temppic, $path);

            $replydate = date('l, d-m-Y H:i');
            $sql = mysqli_query($conn, "INSERT INTO replies VALUES(NULL, '$name', '$pic','$replydate', '$email','$comment', '$postid', '$commentid')");
            if ($sql && $move) {
                echo "<script>alert('Thanks For Your Reply')</script>";
                echo "<script>window.location.href = 'index.php?blog=$postid'</script>";
            } else {
                die("" . mysqli_error($conn));
            }
            // echo $commentid;
        }
        ?>
        <script src="../../../js/comments.js"></script>
    <?php } ?>
    <script src="../../../js/test.js"></script>
</body>

</html>