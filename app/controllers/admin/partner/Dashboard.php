<?php
class Dashboard extends Controller{
    public function index(){
        echo "Trang dashboard";
    }

    public function detail($id=0){
        echo "Trang chi tiết Dashboard với id = $id";
    }
}

?>