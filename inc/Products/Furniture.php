<?php 
class Furniture extends Product {
    function __construct($inputs)
    {
        parent::__construct();
        $this->input=$inputs;
        $this->sku = $this->input['sku'];
        $this->name = $this->input['name'];
        $this->price = $this->input['price'];
        $this->type = $this->input['type'];
        $this->input+=["attr"=>$_POST["height"]."x".$_POST["width"]."x".$_POST["lenght"]];
        $this->exist();
    }
     public function exist(){
        $this->exist=$this->db->select("SELECT * FROM products WHERE sku='".$this->input['sku']."'");
        if ($this->exist) {
            $this->input+=["exist"=>true];
        }

    } 


}

?>