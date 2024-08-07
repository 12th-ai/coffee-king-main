<?php include "../../../../admin/auth/connection.php" ?>
<div class="product-cont-left">
    <div class="product-cont-left-crd">
        <h1>Cart</h1>
        <hr>
    </div>
    <div class="product-cont-left-crd">
        <h1>Categories</h1>
        <hr>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM pro_categories");
        while ($row = mysqli_fetch_array($sql)) {
            $id = $row['ID'];
            $name = $row['Category_Name'];
        ?>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                    <path d="M11.414063 3.585938L8.585938 6.414063L15.171875 13L8.585938 19.585938L11.414063 22.414063L20.828125 13Z" />
                </svg>
                <a href='./categories/?category=<?php echo $id ?>'><?php echo $name ?></a>
            </p>
        <?php } ?>
    </div>
    <div class="product-cont-left-crd filter-1">
        <h1>Filter</h1>
        <hr>

        <?php
        $max = mysqli_query($conn, "SELECT MAX(Product_Discount) AS maximum FROM product");
        $maxfetch = mysqli_fetch_array($max);
        $maxnum = $maxfetch['maximum'];
        $cleanMax = ceil($maxnum);


        $min = mysqli_query($conn, "SELECT MIN(product_price) AS minimum FROM product");
        $minfetch = mysqli_fetch_array($min);
        $minnum = $minfetch['minimum'];
        $cleanMin = floor($minnum);

        // $prodmax = mysqli_query($conn, "SELECT * FROM product WHERE Product_Price = $maxnum");
        // $prodmaxfetch = mysqli_fetch_array($prodmax);
        // $name = $prodmaxfetch['Product_Name'];
        ?>
        <input type="range" name="" min="<?php echo $cleanMin ?>" max="<?php echo $cleanMax ?>" value="1" id="slider">
        <p>Price >= $ <span id="filtSlid"><?php echo $cleanMin ?></span></p>
        <button id="filt">Filter</button>
    </div>
    <div class="product-cont-left-crd filter-2">
        <h1>Multi Filter</h1>
        <hr>
        <div class="multiprice-inp">
            <div class="multiprice-inp-bx">
                <p>From</p>
                $<input type="number" name="minFilt" placeholder="<?php echo $cleanMin ?>" id="minFilt" min="<?php echo $cleanMin ?>" max="<?php echo $cleanMax ?>">
            </div>
            <p>-</p>
            <div class="multiprice-inp-bx">
                <p>To</p>
                $<input type="number" name="maxFilt" placeholder="<?php echo $cleanMax ?>" id="maxFilt" min="<?php echo $cleanMin ?>" max="<?php echo $cleanMax ?>">
            </div>
        </div>
        <div class="caution" id="caution">Please Enter Valid Prices</div>
        <div class="caution" id="caution2">Note: Maximum is $<?php echo $cleanMax ?></div>
        <div class="caution" id="caution3">Note: Minimum is $1</div>
        <div class="caution" id="caution4">Please Enter Different Prices</div>
        <button id="multiFilt">Filter</button>
    </div>
    <div class="product-cont-left-crd tags">
        <h1>Tags</h1>
        <hr>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM pro_tags");
        while ($row = mysqli_fetch_array($sql)) {
            $id = $row['ID'];
            $tagname = $row['Tag_Name'];
        ?>
            <a href='./tags/?tag="<?php echo $id?>"'>#<?php echo $tagname ?>.</a>
        <?php } ?>
    </div>
</div>