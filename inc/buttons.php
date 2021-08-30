<?php


if (isset($_POST['cancel'])) {

    header("location: ../index.php");
}
elseif (isset($_POST['save'])) {

    $filedir=realpath(dirname(__FILE__));
    include_once ($filedir."/../classes/products.php");
    $product=new Product;

    $sku=$_POST['sku'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $type=$_POST['type'];
    if(empty($sku) || empty($name) || empty($price)){
        header("location: ../addproduct.php?the&fields&is&empty");
    }
    if($type=="DVD"){
        $type_specific_attribute="SIZE: ".$_POST["size"]." MB";
        $product->addproduct($sku,$name,$price,$type,$type_specific_attribute);
        header("location: ../index.php");
    }
    if($type=="Furniture"){
        $type_specific_attribute=$_POST["height"]."x".$_POST["width"]."x".$_POST["lenght"];
        $product->addproduct($sku,$name,$price,$type,$type_specific_attribute);
        header("location: ../index.php");
       
    }
    if($type=="Book"){
        $type_specific_attribute="Weight ".$_POST["weight_book"]."KG";
        $product->addproduct($sku,$name,$price,$type,$type_specific_attribute);
        header("location: ../index.php");
       
    }
}
elseif (isset($_POST['add'])) {
    header("location: ../addproduct.php");

}
elseif (isset($_POST['del'])) {
    $filedir=realpath(dirname(__FILE__));
    include_once ($filedir."/../classes/products.php");
    $product=new Product;
    if(!empty($_POST['delete_checkbox'])) {
        foreach($_POST['delete_checkbox'] as $id) {
                $product->delproduct($id);
        }
    }
    header("location: ../index.php");
}