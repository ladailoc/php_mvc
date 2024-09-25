<?php
class Controller{

    // Load model
    public function model($classModel){
        if (file_exists(_DIR_ROOT_.'/app/models/'.$classModel.'.php')){
            require_once _DIR_ROOT_.'/app/models/'.$classModel.'.php';
            if (class_exists($classModel)){
                $model = new $classModel();
                return $model;
            }
        }
        return false;
    }

    // Load view
    public function render($view, $data=[]){
        extract($data); // Chuyển các key của mảng data thành biến
        if (file_exists(_DIR_ROOT_.'/app/views/'.$view.'.php')){
            require_once _DIR_ROOT_.'/app/views/'.$view.'.php';
        }
    }
}