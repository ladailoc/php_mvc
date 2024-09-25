<?php
class Controller{
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
}