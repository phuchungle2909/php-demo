<?php
include_once "ProductQuery.php";

// Khởi tạo mới ProductQuery mở kết nối đến CSDL
$productQuery = new ProductQuery();

// Gọi hàm lấy thông tin chi tiết
echo "Chi tiết sản phẩm <br/>";
$product01 = $productQuery->find(1);
var_dump($product01);
echo "<br/>";

echo "Thêm mối sản phẩm";
$productTaoMoi = new product();
$productTaoMoi ->ten = "Thuy vu";
$productTaoMoi->gia = 1;
$prpductTaoMoi->soLuong = 1;

$dataTaMoi = $productQuery ->insert($productTaoMoi);
?>