<?php

// 1. Khai báo class ProductController
class ProductController
{
    // Khai báo thuộc tính
    // Code...
    public $productQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Gọi hàm khởi tạo ProductQuery -> kết nối csdl
        $this->productQuery = new ProductQuery();
    }

    public function __destruct()
    {
        // Code...
    }

    // Khái báo phương thức showList() để xử lý trường hợp người dùng truy cập trang danh sách
    public function showList()
    {
        // Gọi hàm trong model để lấy dữ liệu 
        $danhSachsp = $this->productQuery->all();
        // echo "<pre>";
        // print_r($danhSachsp);
        // Hiển thị file view tương ứng. Hiển thị file list.php
        include "view/product/list.php";
    }

    // Khái báo phương thức showCreate() để xử lý trường hợp người dùng truy cập trang tạo mới
    public function showCreate()
    {
        // Hiển thị file view
        include "view/product/create.php";
    }

    // Khái báo phương thức showDetail($id) để xử lý trường hợp người dùng truy cập trang chi tiết
    // Lưu ý: Phải nhận vào param là $id muốn xem xem chi tiết
    public function showDetail($id)
    {
        // Log thử giá trị id nhận được
        echo "ID muốn xem chi tiết là: $id <hr>";

        // Kiểm tra giá trị id để xử lý logic
        if ($id !== "") {
            // Hiển thị file view
            include "view/product/detail.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }

    // Khái báo phương thức showUpdate($id) để xử lý trường hợp người dùng truy cập trang chỉnh sửa
    // Lưu ý: Phải nhận vào param là $id muốn xem chỉnh sửa
    public function showUpdate($id)
    {
        // Log thử giá trị id nhận được
        echo "ID muốn xem chỉnh sửa là: $id <hr>";

        // Kiểm tra giá trị id để xử lý logic
        if ($id !== "") {
            // Hiển thị file view
            include "view/product/update.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }
}
