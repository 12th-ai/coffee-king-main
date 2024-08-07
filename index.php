<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee-King</title>
    <link rel="stylesheet" href="./ui/css/home/main.css">
    <link rel="shortcut icon" href="./ui/assets/09/cropped-favicon-300x300.png" type="image/x-icon">
</head>
<?php
include "./admin/auth/connection.php";
?>

<body>
    <header id="mainHeader" class="header">
        <div class="header-cont container">
            <a href="#" class="logo">
                <img src="./ui/assets/09/logo_black-9.png" alt="">
            </a>
            <nav id="navMenu">
                <div class="nav-close" id="nav-closing">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                        <path d="M15.125 12.28125L12.28125 15.125L22.21875 25L12.28125 34.875L15.125 37.71875L25.0625 27.84375L35 37.71875L37.8125 34.875L27.90625 25L37.8125 15.125L35 12.28125L25.0625 22.15625Z" />
                    </svg>
                </div>
                <a href="#" class="activeNav">Home</a>
                <div class="dropdown">
                    <button>About Us</button>
                    <div class="dropdown-cnt ab-drop" id="nav">
                        <a href="./ui/pages/about/about/">About Us</a>
                        <a href="./ui/pages/about/delivery/">Delivery</a>
                        <a href="./ui/pages/about/events/">Events</a>
                        <a href="./ui/pages/about/offers/">Special Offers</a>
                        <a href="./ui/pages/about/testimonial/">Testimonials</a>
                        <a href="./ui/pages/about/team/">Team</a>
                        <a href="./ui/pages/about/faq/">FAQ</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button>Explore</button>
                    <div class="dropdown-cnt prod-drop" id="nav2">
                        <a href="./ui/pages/explore/shop/">Shop</a>
                        <a href="./ui/pages/explore/cart/">Cart</a>
                        <a href="./ui/pages/explore/checkout/">Checkout</a>
                        <a href="./ui/pages/explore/account/signin/">My Account</a>
                    </div>
                </div>
                <a href="./ui/pages/blog/">Blog</a>
                <a href="./ui/pages/gallery/">Gallery</a>
                <a href="./ui/pages/contact/">Contact</a>
            </nav>
            <div class="header-next">
                <a href="./ui/pages/explore/cart/" class="header-next-cart">
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

    <div class="home">
        <div class="home-cont container">
            <div class="home-cont-left">
                <div class="home-cont-left-first">
                    <h1>Coffe Market</h1>
                    <h3>online store</h3>
                </div>
                <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies.</p>
                <div class="header-cont-left-lnks">
                    <a href="./ui/pages/about/about/" class="more more-black nd">Read More</a>
                    <a href="./ui/pages/explore/shop/" class="more nd">View Products</a>
                </div>
            </div>
            <div class="home-cont-right">
                <img src="./ui/assets/09/coffee_slide-1-2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about-cont container">
            <div class="about-cont-left">
                <div class="about-cont-left-title">
                    <p>Who We Are</p>
                    <h1>About Market</h1>
                </div>
                <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus egetmagna aliquet ultricies. Praesent gravida hendrerit ex, nec eleifend sem convallis vitae.</p>
                <div class="about-cont- left-sign">
                    <img src="./ui/assets/09/sign.png" alt="">
                </div>
            </div>

            <div class="about-cont-right">
                <div class="about-cont-right-crd">
                    <div class="about-cont-right-crd-img">
                        <img src="./ui/assets/09/about-icon-1.png" alt="">
                    </div>
                    <h1>The Best World Sorts</h1>
                    <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies.</p>
                </div>

                <div class="about-cont-right-crd">
                    <div class="about-cont-right-crd-img">
                        <img src="./ui/assets/09/about-icon-2.png" alt="">
                    </div>
                    <h1>Many points of sale</h1>
                    <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies.</p>
                </div>

                <div class="about-cont-right-crd">
                    <div class="about-cont-right-crd-img">
                        <img src="./ui/assets/09/about-icon-3.png" alt="">
                    </div>
                    <h1>Professional baristas</h1>
                    <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies.</p>
                </div>

                <div class="about-cont-right-crd">
                    <div class="about-cont-right-crd-img">
                        <img src="./ui/assets/09/about-icon-4.png" alt="">
                    </div>
                    <h1>24/7 fast delivery</h1>
                    <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="recent">
        <div class="recent-cont container">
            <div class="recent-title">
                <p>Choose your Coffee</p>
                <h1>Recent Products</h1>
            </div>
            <div class="recent-crds">

                <?php
                $sql = mysqli_query($conn, "SELECT * FROM product ORDER BY ID DESC LIMIT 4");
                while ($fetch = mysqli_fetch_array($sql)) {
                    $id = $fetch['ID'];
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

                ?>
                    <div class="product-crd">
                        <div class="product-crd-img">
                            <img src="./ui/assets/products/<?php echo $pic ?>" alt="<?php echo $name ?>">
                        </div>
                        <a href='./ui/pages/explore/shop/product/?product="<?php echo $id ?>"'><?php echo $name ?></a>
                        <p class="briefProduct">Duis et aliquam orci. Vivamus augue quam, sollicitudin quis bibendum quis, eleifend vitae velit.am, sollicitudin quis bibendum quis, eleifend vitae velit.am, sollicitudin quis bibendum quis, eleifend vitae velit.</p>
                        <div class="product-crd-price">
                            <?php
                            if ($price == $discount) {
                            ?>
                                <h1>$<?php echo $price ?></h1>
                            <?php } else { ?>
                                <del>$<?php echo $price ?></del>
                                <h1>$<?php echo $discount ?></h1>
                            <?php } ?>
                        </div>
                        <button class="more cart-btn" <?php if ($stock <= 0) {
                                                            echo "disabled";
                                                        } ?>>
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
                            Add to Cart
                        </button>
                        <div class="glow"></div>
                        <div class="glow"></div>
                        <?php if ($stock <= 0) { ?>
                            <span class="redSpan">SOLD</span>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <a href="./ui/pages/explore/shop/" class="more more-trans">View All Products</a>
        </div>
    </div>

    <div class="map">
        <div class="map-cont container">
            <div class="map-cont-left">
                <h1>Sales and Delivery points</h1>
                <p>Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinartellus eget magna aliquet ultricies. Praesent gravida hendreritex, nec eleifend semconvallis vitae.</p>
                <div class="map-cont-left-locations">
                    <p>Where buy our Coffee</p>
                    <div class="map-cont-left-locations-crds">
                        <div class="map-cont-left-locations-crd">
                            <h1>Africa</h1>
                            <p>(67)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Brazil</h1>
                            <p>(96)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Russia</h1>
                            <p>(3)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>USA</h1>
                            <p>(67)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Argentina</h1>
                            <p>(43)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Asia</h1>
                            <p>(26)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Mexico</h1>
                            <p>(10)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Europe</h1>
                            <p>(379)</p>
                        </div>

                        <div class="map-cont-left-locations-crd">
                            <h1>Canada</h1>
                            <p>(23)</p>
                        </div>

                    </div>
                    <a href="./ui/pages/soon/" class="more">View All Points</a>
                </div>
            </div>

            <div class="map-cont-right">
                <img src="./ui/assets/09/map.png" alt="">
            </div>
        </div>
    </div>

    <div class="dealer">
        <div class="dealer-cont container">
            <div class="dealer-cont-left">
                <p>More than</p>
                <h1>5400</h1>
                <h3>customers <br> trust us</h3>
            </div>
            <div class="dealer-cont-right">
                <h1>Become Our Dealer</h1>
                <p>Curabitur sollicitudin ultrices tortor, eget pulvinar risus cursus eu. Vivamus sit amet odio massa. Vivamus dapibus elementum tellus nec fermentum. Sed blandit condimentum molestie. In hac habitasse pProductsa dictumst. Etiam fringilla a elit at ornare.</p>
                <div class="header-cont-left-lnks lnks">
                    <a href="./ui/pages/soon/" class="more more-black nd">Become a dealer</a>
                    <a href="./ui/pages/contact/" class="more nd">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="testimonials-cont container">
            <div class="testimonials-cont-title">
                <p>Our Clients say</p>
                <h1>Testimonials</h1>
            </div>
            <div class="testimonials-crds">
                <div class="testimonials-crd">
                    <div class="testimonials-crd-title">
                        <h1>Steven Rashford</h1>
                        <p>Developer</p>
                    </div>
                    <p>Duis et tellus imperdiet, lacinia risus id, tincidunt ipsum. Integer euismod elit vel nibh commodo, at consequat nisl rhoncus. Aliquam tempor lorem odio, non aliquam nunc egestas in. Proin rutrum justo ac lorem pellentesque pretium.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                    </svg>
                </div>

                <div class="testimonials-crd">
                    <div class="testimonials-crd-title">
                        <h1>Patrick James</h1>
                        <p>Counselor</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis at turpis eu faucibus. In dignissim, enim eu ornare aliquet, metus ex tempor neque, sit amet efficitur turpis lorem et odio. Nam congue in orci at facilisis</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                    </svg>
                </div>
            </div>
            <a href="./ui/pages/about/testimonial/" class="more">Read More</a>
        </div>
    </div>

    <div class="sponsors">
        <div class="sponsors-cont container">
            <img src="./ui/assets/09/restaurants.png" alt="">
            <img src="./ui/assets/09/vintage.png" alt="">
            <img src="./ui/assets/09/cupcake.png" alt="">
            <img src="./ui/assets/09/coffe_logo2.png" alt="">
            <img src="./ui/assets/09/bakery.png" alt="">
            <img src="./ui/assets/09/brandit.png" alt="">
        </div>
    </div>

    <div class="discounts">
        <div class="discounts-cont container">
            <div class="discount-cont-left">
                <h2>Special Offer</h2>
                <h1>Get Your Discount</h1>
                <img src="./ui/assets/09/card.png" alt="">
                <p>Morbi malesuada dui in iaculis lacinia. Duis laoreet ut liberonec tincidunt. Maecenas a eros finibus, condimentum tortoreget, auctor nunc. Aenean a efficitur leo.</p>
                <a href="./ui/pages/soon/" class="more">Get Now</a>
            </div>
            <div class="discount-cont-right">
                <img src="./ui/assets/09/coffe_back.png" alt="">
            </div>
        </div>
    </div>

    <div class="blog">
        <div class="blog-cont container">
            <div class="blog-cont-title">
                <p>Our Blog</p>
                <h1>Recent Posts</h1>
            </div>

            <div class="blog-cont-crds">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM blog WHERE `Status` = 1 ORDER BY ID DESC LIMIT 0,3");
                if (mysqli_num_rows($sql) > 0) {
                    while ($row = mysqli_fetch_array($sql)) {
                        $id = $row['ID'];
                        $title = $row['Title'];
                        $summary = $row['Summary'];
                        $img = $row['Img_Name'];
                        $date = $row['Date'];
                        $views = $row['Views'];
                        $comments = $row['Comments'];
                ?>

                        <a href='./ui/pages/blog/pg/?blog=<?php echo $id ?>' class="blog-cont-crd">
                            <div class="blog-cont-crd-img">
                                <img src="./ui/assets/blog/<?php echo $img ?>" alt="#<?php echo $id ?>">
                            </div>
                            <h1><?php echo $title ?></h1>
                            <p class="blog-cont-txt"><?php echo $summary ?></p>
                            <div class="blog-cont-crd-dates">
                                <div class="blog-cont-crd-dates-left">
                                    <!-- <h1>25</h1> -->
                                    <div class="blog-cont-crd-dates-left-other">
                                        <p><?php echo $date ?></p>
                                    </div>
                                </div>
                                <div class="blog-cont-crd-dates-right">
                                    <div class="blog-cont-crd-dates-right-crd">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" />
                                        </svg>
                                        <?php echo $views ?>
                                    </div>

                                    <div class="blog-cont-crd-dates-right-crd">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z" />
                                        </svg>
                                        <?php echo $comments ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($views < 45) {
                            ?>
                                <span class="redSpan">New Post</span>
                            <?php } ?>
                        </a>
                    <?php }
                } else { ?>
                    <p>No Blog Posts Yet, Stay Tuned...</p>
                <?php } ?>
            </div>

            <a href="./ui/pages/blog/" class="more more-trans">Read More</a>
        </div>
    </div>

    <div class="footer">
        <div class="footer-cont container">
            <div class="footer-cont-first">
                <div class="footer-cont-first-logo">
                    <img src="./ui/assets/09/logo_white-7.png" alt="">
                </div>
                <p>Pellentesque congue non augue vitae pellentesque. Morbi sollicitudin eleifend rhoncus. Mauris vel nisl a massa viverra sollicitudin semper a diam.</p>
                <a href="./ui/pages/soon/" class="more">Check It Out</a>
            </div>

            <div class="footer-cont-scnd footer-crds">
                <h1>Explore</h1>
                <div class="footer-cont-scnd-blw">
                    <a href="#" class="footeractive">Home</a>
                    <a href="./ui/pages/blog/">Blog</a>
                    <a href="./ui/pages/contact/">Contact Us</a>
                    <a href="./ui/pages/about/about/">About Us</a>
                    <a href="./ui/pages/explore/shop/">Shop</a>
                    <a href="./ui/pages/gallery/">Gallery</a>
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
    <script src="./ui/js/test.js"></script>
    <script src="./ui/js/cart.js"></script>
</body>

</html>