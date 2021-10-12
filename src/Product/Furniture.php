<?php 
class Furniture extends Product {
    function __construct($inputs)
    {
        parent::__construct();
        $this->input=$inputs;
        $this->input+=["data_by_type"=>$_POST["height"]."x".$_POST["width"]."x".$_POST["lenght"]];
        $this->exe();
    }
     public function exe(){
        if (!$this->find($this->input['sku'])) {
            $this->save($this->input);
        }

    } 



}
