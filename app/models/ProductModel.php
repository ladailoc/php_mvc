<?php
class ProductModel{
    public function getListProduct(){
        return [
            ['id' => 1, 'name' => 'Product 1', 'price' => 1000],
            ['id' => 2, 'name' => 'Product 2', 'price' => 2000],
            ['id' => 3, 'name' => 'Product 3', 'price' => 3000],
        ];
    }
}