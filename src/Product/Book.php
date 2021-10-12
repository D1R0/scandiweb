<?php 


class Book extends Product {
    function __construct($inputs)
    {
        parent::__construct();
        $this->input=$inputs;
        $this->input+=["data_by_type"=>"Weight ".$_POST["weight_book"]];
        $this->exe();
    }
     public function exe(){
        if (!$this->find($this->input['sku'])) {
            $this->save($this->input);
        }

    } 


}
