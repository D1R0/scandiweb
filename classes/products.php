<?php
    $filedir = realpath(dirname(__FILE__));
    include_once ($filedir."/../lib/database.php");
    
    class Product{

        private $db;

        public function __construct()
        {
            $this->db=new Database();
        }

        public function addproduct($sku,$name,$price,$type,$type_specific_attribute){
            $sql="INSERT INTO products (sku,name,price,type,data_by_type) VALUES ('$sku','$name','$price','$type','$type_specific_attribute')";
            $this->db->insert($sql);

        }

        public function delproduct($id){
            $sql="DELETE FROM products WHERE id='$id'";
            $this->db->delete($sql);
        }
    }   

?>