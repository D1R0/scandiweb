<?php

if (isset($_POST['cancel'])) {

    header("location: ../index.php");
}
elseif (isset($_POST['save'])) {
    switch($product){
        case strlen($_POST['sku'])==0:
            header("location: ../addproduct.php?sku=empty");
            break;
        case strlen($_POST['name'])==0:
            header("location: ../addproduct.php?name=empty");
            break;
        case strlen(strval($_POST['price']))==0:
            header("location: ../addproduct.php?price=empty");
            break;
        case $_POST['type']=="DVD":
            $product->dvd=new DVD($_POST);
            $product->dvd->addproduct($product->dvd->input);
            break;
        case $_POST['type']=="Furniture":
            $product->furniture=new Furniture($_POST);
            $product->furniture->addproduct($product->furniture->input);
            break;
        case $_POST['type']=="Book":
            $product->book=new Book($_POST);
            $product->book->addproduct($product->book->input);
            break;
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