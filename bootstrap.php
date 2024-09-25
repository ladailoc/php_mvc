<?php
// Define root path
define ('_DIR_ROOT_', __DIR__);

// Xử lý http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
else
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];

// Thay thế tất cả các dấu \ thành /
$dir_root = str_replace('\\', '/', _DIR_ROOT_);
// Thay chuỗi $_SERVER['DOCUMENT_ROOT'] thành chuỗi rỗng trong chuỗi $dir_root
$folder = str_replace($_SERVER['DOCUMENT_ROOT'], '', $dir_root);

$web_root = $web_root.$folder; // http://localhost/php_mvc

// Định nghĩa hằng số _WEB_ROOT_ chứa đường dẫn gốc của website
define('_WEB_ROOT_', $web_root);

require_once 'configs/routes.php';
require_once 'core/Controller.php'; // Load base Controller
require_once 'app/App.php'; // Load app

?>