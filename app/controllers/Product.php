<?php
class Product extends Controller{
    public $data = [];

    public function index(){
        echo "Danh sách sản phẩm : ";
    }

    public function list_product(){
        $product = $this->model('ProductModel');
        $dataProduct = $product->getListProduct();
        // Data to render view
        $this->data['sub_content']['product_list'] = $dataProduct; // Data để render view
        
        // Root view to render
        $this->data['content'] = 'products/list'; // View để render
        $this->data['page_title'] = 'Trang danh sách';

        // Render layout
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail($id=0){
        $product = $this->model('ProductModel');
        // Data to render view
        $this->data['sub_content']['info'] = $product->getProductDetail($id);
        $this->data['sub_content']['title'] = 'Chi tiết sản phẩm'; 

        // Root view to render
        $this->data['page_title'] = 'Trang chi tiết';
        $this->data['content'] = 'products/detail'; // View để render

        // Render layout
        $this->render('layouts/client_layout', $this->data);
    }
}


?>