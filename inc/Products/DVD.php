<?php 
class DVD extends Product {
    function __construct($inputs)
    {
        parent::__construct();
        $this->input=$inputs;
        $this->sku = $this->input['sku'];
        $this->name = $this->input['name'];
        $this->price = $this->input['price'];
        $this->type = $this->input['type'];
        $this->input+=["attr"=>"SIZE: ".$_POST["size"]." MB"];
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