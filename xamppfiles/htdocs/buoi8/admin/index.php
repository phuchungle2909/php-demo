<?php
echo "index của admin <br>";
// 1. Lấy các giá trị cần thiết từ url
// Lấy giá trị act

$act = "";
if (isset($_GET["act"])){
    $act = $_GET["act"];

}
echo  " giá trị act là: $act <hr>";
// 2. Kiểm tra giá trị của $act và điều hướng tới các trang tương ứng 
?>