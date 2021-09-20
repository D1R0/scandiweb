<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
include "classes/products.php";

$filedir = realpath(dirname(__FILE__));
include_once ($filedir."/../lib/database.php");
include_once ($filedir."/../classes/products.php");

$product=new Product;

?>
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="/img/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <script src="js/main.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>

    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

    <title><?php echo $title;?></title>
</head>