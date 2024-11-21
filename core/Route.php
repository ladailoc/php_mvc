<?php
class Route{

    function handleRoute($url){
        global $routes;
        unset($routes['default_controller']);

        if ($url == '/') return $url;
        // Xóa dấu / ở đầu và cuối chuỗi
        $url = trim($url, '/');
        $handleUrl = $url;  

        if (!empty($routes)){
            foreach ($routes as $key => $value){
                // Nếu có route giống với url thì thay thế url
                if (preg_match('~'.$key.'~is', $url)){
                    $handleUrl = preg_replace('~'.$key.'~is', $value, $url);
                }
            }
        }
        return $handleUrl;

    }
}


?>