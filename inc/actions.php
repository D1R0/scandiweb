<?php

if (isset($_POST['cancel'])) {

    header("location: ../index.php");
}
elseif (isset($_POST['save'])) {

    $product->sku=$_POST['sku'];
    $product->name=$_POST['name'];
    $product->price=$_POST['price'];
    $product->type=$_POST['type'];
    if(empty($product->sku) || empty($product->name) || empty($product->price)){
        header("location: ../addproduct.php?the&fields&is&empty");
    }
    if($product->type=="DVD"){
        $product->specific_attribute="SIZE: ".$_POST["size"]." MB";
        $product->addproduct($product->sku,$product->name,$product->price,$product->type,$product->specific_attribute);
        header("location: ../index.php");
    }
    if($product->type=="Furniture"){
        $product->specific_attribute=$_POST["height"]."x".$_POST["width"]."x".$_POST["lenght"];
        $product->addproduct($product->sku,$product->name,$product->price,$product->type,$product->specific_attribute);
        header("location: ../index.php");
       
    }
    if($product->type=="Book"){
        $product->specific_attribute="Weight ".$_POST["weight_book"]."KG";
        $product->addproduct($product->sku,$product->name,$product->price,$product->type,$product->specific_attribute);
        header("location: ../index.php");
       
    }
}
elseif (isset($_POST['add'])) {
    header("location: ../addproduct.php");

}
elseif (isset($_POST['del'])) {
    if(!empty($_POST['delete_checkbox'])) {
        foreach($_POST['delete_checkbox'] as $id) {
                $product->delproduct($id);
        }
    }
    header("location: ../index.php");
}