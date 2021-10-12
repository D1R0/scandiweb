<?php

class Product extends QueryBuilder
{
    private $table_name = 'products';

    function __construct()
    {
        parent::__construct($this->table_name);
    }


    public function find(string $sku)
    {
        return $this->select('*')->where($sku, "=")->get();
    }

    public function save($input)
    {
        $data = ["sku" => $input['sku'], "name" => $input['name'], "price" => $input['price'], "type" => $input['type'], "data_by_type" => $input['data_by_type']];

        return $this->insert($data);
    }

    public function getAll()
    {
        return $this->select('*')->bind();
    }

    public function remove(string $sku)
    {
        return $this->delete()->where($sku, "=")->bind();
    }
};
