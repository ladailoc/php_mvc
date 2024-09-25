<?php
class ProductModel{
    public function getListProduct(){
        return [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3',
        ];
    }

    public function getProductDetail($id){
        $data = [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3',
        ];
        return $data[$id];
    }
}