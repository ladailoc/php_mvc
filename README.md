- Folder app -> Viết toàn bộ mô hình MVC 

- File .htaccess -> cấu hình để rewrite url

- Folder configs dùng để cấu hình

- App 
  Model -> lấy dữ liệu từ DB
  Controller -> lấy dữ liệu từ Model

- Controller kế thừa từ core/Controller để có thể call Model và get data từ Model

- Sau khi controller lấy dc data thì render ra view 

- Code render sẽ đc gọi từ core/Controller 

- Core/Controller có nhiệm vụ load model và load view 

- Khi truyền dữ liệu từ controller qua layout và muốn data này render sang view thì sẽ truyền dữ liệu 
bằng mảng 2 chiều thông qua sub_content
VD :
    $this->data['content'] = 'product/detail' 
    $this->data['sub_content']['title'] = ... 
=> Trong phần layout sẽ render ra view và truyền dữ liệu từ controller qua như
VD : 
    $this->render($content, $sub_content)

- Các tùy chọn biểu thức chính quy 
  i : không phân biệt chữ hoa chữ thường
  m : định nghĩa dấu ^ và $ ở đầu và cuối chuỗi
  s : định nghĩa dấu . là ký tự xuống dòng
  x : bỏ qua khoảng trắng và comment trong biểu thức chính quy
  A : bắt đầu từ đầu chuỗi

- Cấu trúc của biểu thức chính quy với dấu phân cách
  ~: Dấu phân cách mở đầu.
  $key: Mẫu biểu thức chính quy được tạo động từ biến $key.
  ~: Dấu phân cách kết thúc.
  is: Các tùy chọn cho biểu thức chính quy

- Core/Route có tác dụng chỉnh url theo định dạng config routes

- HomeModel sẽ kế thừa từ Model, Model kế thừa từ Database, Database kết nối với Connection => Home Controller sẽ lấy dữ liệu từ HomeModel
-------------------------------------------------

index làm việc với bootstrap
=> bootstrap gọi config routes và làm việc với app
=> app để điều hướng gọi controller tương ứng dựa vào url
=> trong các controller gồm các class và các action (method)



-----------------------------------------------------
$SERVER['PATH_INFO'] -> là đường dẫn của web trừ thư mục gốc ra
VD : localhost/php_mvc/home/index.php
    -> $SERVER['PATH_INFO'] = home/index.php

_DIR_ROOT_ -> là đường dẫn của trang web lớn
VD : /Applications/Ampps/www/php_mvc

_WEB_ROOT_ -> là đường dẫn http root của web
VD : http://localhost/php_mvc 

$_SERVER['HTTP_HOST'] -> là "localhost"

$_SERVER['HTTPS'] -> web sử dụng giao thức https

$_SERVER['HTTP'] -> web sử dụng giao thức http 

$_SERVER['DOCUMENT_ROOT'] -> là đường dẫn web nhưng không có chứa tên thư mục
VD : /Applications/Ampps/www/

