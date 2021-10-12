<?php
/* Back-End */

$dir = "src";
$sort = [];
$files = scandir($dir); 

foreach ($files as $file) {
    if (strpos($file, "php")) {
        array_push($sort, $dir . "/" . $file);
    }
}

for ($i = 0; $i < count($sort); $i++) {
    if ($i) {
        require $sort[count($sort) - $i];
    } else {
        require $sort[$i];
    }
}

$products = new Product;

