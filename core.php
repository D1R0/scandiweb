<?php

require "loader.php"; /* Back-End Loader */


/* Buttons Actions */
if (isset($_POST['del'])) {

    if (!empty($_POST['delete_checkbox'])) {
        foreach ($_POST['delete_checkbox'] as $sku) {
            $products->remove($sku);
        }
    }
}
if (isset($_POST['save'])) {
    switch($products){
        case(!empty($_POST['sku']) && !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['type'])): 
            require "src/Product/".$_POST['type'].".php";
            $class=$_POST['type'];
            $product= new $class($_POST);
            $product;
    }
}

$title = "Product list";
if (isset($_POST['add'])) {
    $title = "Add Product";
}
if (isset($_POST['cancel'])) {
    $title = "Product list";
}


/* Front-End */
echo "<body>";
$dir = "layout";
if ($title == "Product list") {
    require $dir . "/" . "top_section.php";
    require $dir . "/" . "products.php";
    require $dir . "/" . "footer.php";
} elseif ($title == "Add Product") {
    require $dir . "/" . "add_section.php";
    require $dir . "/" . "footer.php";
}

echo "    <title> $title</title></body>";
