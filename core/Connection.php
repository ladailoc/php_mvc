<?php
class Connection{
    private static $instance = null;
    private static $conn = null;

    private function __construct($config){
        // Kết nối database
        try{
            // Cấu hình dsn
            $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];

            // Cấu hình $options
            /**
             * Cấu hình utf-8
             * Cấu hình ngoại lệ khi truy vấn bị lỗi
             */
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            // Tạo kết nối
            self::$conn = new PDO($dsn, $config['user'], $config['pass'], $options);
        }
        catch (Exception $e){
            die('Connection failed: '.$e->getMessage());
        }
    }

    public static function getInstance($config){
        return self::$instance ?? self::$instance = new Connection($config);
    }

    public static function getConnection(){
        return self::$conn;
    }
}

?>