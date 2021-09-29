<?php
    $filedir = realpath(dirname(__FILE__));
    include_once ($filedir."/../lib/database.php");
    
    abstract class actions{
        abstract public function addproduct($input);

        abstract public function delproduct($id);

        abstract public function showproducts();
    }

    class Product extends actions{

        protected $db;

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

        public function addproduct($input){
            if($input['exist']){
                header("location: ../addproduct.php?product=exist&".$input['sku']);
            } else {
                $sql="INSERT INTO products (sku,name,price,type,data_by_type) VALUES ('".$input["sku"]."','".$input["name"]."','".$input["price"]."','".$input["type"]."','".$input["attr"]."')";
                $this->db->insert($sql);
                header("location: ../index.php");

            }

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