<?php
class Home extends Controller{
    public $model_home;
    public function __construct(){
        $this->model_home = $this->model('HomeModel');
    }
    function index(){
        $data = $this->model_home->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $detail = $this->model_home->getDetail(2);
        echo '<pre>';
        print_r($detail);
        echo '</pre>';
    }
}

?>