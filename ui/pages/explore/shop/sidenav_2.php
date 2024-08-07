<?php include "../../../../../admin/auth/connection.php" ?>
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
            $catid = $row['ID'];
            $catname = $row['Category_Name'];
        ?>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                    <path d="M11.414063 3.585938L8.585938 6.414063L15.171875 13L8.585938 19.585938L11.414063 22.414063L20.828125 13Z" />
                </svg>
                <a href='../categories?category=<?php echo $catid ?>' class="<?php
                                                                            if (isset($_GET['category'])) {
                                                                                if ($_GET['category'] == $id) {
                                                                                    echo "activeCategory";
                                                                                }
                                                                                // echo "class='activeCategory'";
                                                                            }
                                                                            ?>">
                    <?php echo $catname ?>
                </a>
            </p>
        <?php } ?>
    </div>
    <div class="product-cont-left-crd tags">
        <h1>Tags</h1>
        <hr>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM pro_tags");
        while ($row = mysqli_fetch_array($sql)) {
            $tagid = $row['ID'];
            $tagname = $row['Tag_Name'];
        ?>
            <a href='../tags/?tag=<?php echo $tagid ?>' class="<?php
                                                            if (isset($_GET['tag'])) {
                                                                if ($_GET['tag'] == $id) {
                                                                    echo "activeTag";
                                                                }
                                                                // echo "class='activeCategory'";
                                                            }
                                                            ?>">#<?php echo $tagname ?>.</a>
        <?php } ?>
    </div>
</div>