<?php
class Home{
    function index(){
       echo "Trang chủ"; 
    }
    function detail($id="", $slug=""){
        echo "ID : $id<br>";
        echo "SLUG : $slug";
    }
    public function search(){
        $keyword = $_GET['keyword'];
        echo "Từ khóa tìm kiếm: ". $keyword;
    }
}

?>