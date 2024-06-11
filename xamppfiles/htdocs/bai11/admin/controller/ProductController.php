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
        //Gọi hàm khởi tạo productQuery -> để keeys nối cơ sở dữ liệu
        $this->productQuery= new productQuery();
    }

    public function __destruct()
    {
        // Code...
    }

    // Khái báo phương thức showList() để xử lý trường hợp người dùng truy cập trang danh sách
    public function showList()
    {
        // Gọi gàm model để lấy dữ liệu
        $danhSachsp=$this->productQuery->all();
        echo "<pre>";
        print_r($danhSachsp);
        // Hiển thị file view tương ứng. Hiển thị file list.php
        include "view/product/list.php";
    }

    // Khái báo phương thức showCreate() để xử lý trường hợp người dùng truy cập trang tạo mới
    public function showCreate()
    {
         // 1. Khai báo biến được sử dụng trên view
    $thongBaoLoi="";
    $thongBaoThanhCong="";
    $product = new Product();
// xử lý form khi người dùng tạo mới
if(isset($_POST['submitForm'])){
    var_dump($_POST);
    // Lấy giá trị các ô input gán cho object $product
    $product->name = trim($_POST['name']);
    $product->price = trim($_POST['price']);
    $product->image_src = trim($_POST['image_src']);
    $product->created_date = trim($_POST['created_date']);
    // validate giá trị nhập vào
    // validate bắt buộc nhập
    if($product->name ==="" || $product->price ==="" || $product-> created_date === ""){
        $thongBaoLoi ="Tên,Giá,Ngày tạo là thông tin bắt buộc.Mời bạn nhập lại";
    }
}
// Validate khác nếu đè bài yêu cầu
// Xử lý upload ảnh TODO
// GỌi model để insert object $product vào CSDL
// Kiểm tra trạng thái $thongBaoLoi
if($thongBaoLoi ===""){
    $data = $this->productQuery->insert($product);
    // Giả sử insert thành công CSDL thông báo ok
    if($data ==="ok"){
        // reset giá trị object $product
        $product = new Product();
        // Tạo thông báo thành công
        $thongBaoThanhCong="Tạo mới thành công. Mời tiếp tục tạo sản phẩm";
    }else{
        // tạo mới thất bại
        $thongBaoLoi ="Tạo mới thất bại. Mời kiểm tra lỗi và thực hiện lại";

    }
}
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
