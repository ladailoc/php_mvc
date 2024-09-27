<?php
// Kế thừa từ class Model
class HomeModel extends Model{
    protected $_table = 'courses';

    public function __construct(){
        parent::__construct();
    }

    public function getList(){
        $data = $this->db->query("SELECT * FROM $this->_table");
        return $data;
    }

    public function getDetail($id){
        $data = ['Item 1', 'Item 2', 'Item 3'];
        return $data[$id];
    }
}
