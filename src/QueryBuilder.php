<?php

abstract class QueryBuilder
{
    private $db;
    private $query = '';
    private $table_name = "";
    private $stmt;

    function __construct($table_name)
    {
        $this->db = (new Database)->get();
        $this->table_name = $table_name;
    }

    public function select($columns)
    {
        $this->query = 'SELECT ' . $columns . ' FROM ' . $this->table_name;
        return $this;
    }
    public function insert(array $input)
    {

        $this->query = 'INSERT INTO ' . $this->table_name . ' (' . implode(',', array_keys($input)) . ') VALUES (' .$this->Values($input). ')';
        return $this->bind();
    }

    public function delete()
    {
        $this->query = 'DELETE FROM ' . $this->table_name;
        return $this;
    }

    public function where($conditin, $equal)
    {
        $this->query .= " WHERE sku " . $equal . " ('" . $conditin . "')";
        return $this;
    }

    public function bind()
    {
        $this->stmt = $this->db->query($this->query);
        return $this->stmt;
    }
    public function get()
    {
        return $this->bind()->fetch_assoc();
    }

    public function Values(array $input){
        $values='';
        foreach ($input as $value){
            if($value==$input['data_by_type']){
                $values.="'".$value."'";
            }
            else {
                $values.="'".$value."',";
            }
        }
        return $values;
    }
};
