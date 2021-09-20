<?php
    $filedir = realpath(dirname(__FILE__));
    include_once ($filedir."/../lib/database.php");
    
    abstract class actions{
        abstract public function addproduct($sku,$name,$price,$type,$type_specific_attribute);

        abstract public function delproduct($id);

        abstract public function showproducts();
    }

    class Product extends actions{

        private $db;

        private $data = array();
 
        public function __set($name, $value) 
        {
            $this->data[$name] = $value;
        }
     
        public function __get($name) 
        {
            If (isset($this->data[$name])) {
                return $this->data[$name];
            }
        }
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
        public function showproducts(){
            $this->items = $this->db->select("SELECT * FROM products");
            if ($this->items) {  
              while ($row = $this->items->fetch_assoc()) {
                echo '<div class="col-2">
                <input type="checkbox" class="delete-checkbox" name="delete_checkbox[]" value="' . $row["id"] . '">';
                echo "<p>" . $row["sku"] . "</p><p>" . $row["name"] . "</p><p> Price: " . $row["price"] . " $</p><p> " . $row["data_by_type"] . "</p>";
                echo "</div>";
        
              }
        
            }
        }
    }   

?>