<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/18/18
 * Time: 10:12 AM
 */

class users{

    public function __construct($parent)
    {
        $this->db = $parent->db;
    }

    public function select($sql, $value=array()){

        $this->sql = $this->db->prepare($sql);
        $result = $this->db->execute($value);
        $data = $this->sql->fetchAll();

        return $data;
    }

    public function add($sql, $value=array()){

        $this->sql = $this->db->execute($sql);
        $results = $this->db->execute($value);

    }

    public function delete(){

    }

    public function update(){

    }
}