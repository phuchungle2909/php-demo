<?php
class BookController
{
    // Khai báo thuộc tính
    // Code...
    public $bookQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
        $this->bookQuery = new ProductQuery;
    }

    public function __destruct()
    {
        // Code...
    }

    public function showList()
    {
        $danhSachsp =$this->bookQuery->all();

        include "view/book/list.php";
    }

    public function showCreate()
    {
        // 1. Khai báo biến được sử dụng trên view
        $thongBaoLoi = "";
        $thongBaoThanhCong = "";
        $product = new Product();
        // thử lý form khi người dùng bấm nút Tạo mới
        if (isset($_POST["submitForm"])) {
            var_dump($_POST);

            // Lấy giá trị các ô input gán cho object $product
            $product->title = trim($_POST["title"]);
            $product->cover_image = trim($_POST["cover_image"]);
            $product->author = trim($_POST["author"]);
            $product->publisher = trim($_POST["publisher"]);
            $product->publish_date = trim($_POST["publish_date"]);

            // Validate giá trị nhập vào
            // Validate bắt buộc nhập
            if ($product->title === "" || $product-> author === "" || $product-> publisher === "" ) {
                $thongBaoLoi = "Tên, Tác Giả, Ngày xuất bản là thông tin bắt buộc. Mời bạn nhập lại";
            }
            // Validate khác nếu đề bài yêu cầu
            // Xử lý upload ảnh TODO
            echo "<hr>";
            var_dump($_FILES);
            echo "<hr>";
            //Lưu ý 2 thông tin
            // tmp_name: Bộ nhớ tạm lưu trữ file
            //name : tên file
            if(isset($_FILES["file_upload"]) && $_FILES["file_upload"]["tmp_name"] !== ""){
                $hinh_anh = $_FILES["file_upload"]["tmp_name"];
                $vi_tri_luu = "../img/" . $_FILES["file_upload"]["name"];
                if(move_uploaded_file($hinh_anh, $vi_tri_luu)){
                    echo "upload file thành công";
                    $product->image_src = "img/" . $_FILES["file_upload"]["name"];
                }else{
                    echo "Upload thất bại";
                }
            }
            // Gọi model để insert object $product vào CSDL
            // Kiểm tra trạng thái $thongBaoLoi
            if ($thongBaoLoi === "") {
                $data = $this->bookQuery->insert($product);
                // Giả sử insert thành công CSDL thông báo ok
                if ($data === "ok") {
                    // reset giá trị object $product
                    $product = new Product();

                    // Tạo thông báo thành công
                    $thongBaoThanhCong = "Tạo mới thành công. Mời tiếp tục tạo sản phẩm";
                } else {
                    // Tạo mới thất bại
                    $thongBaoLoi = "Tạo mới thất bại. Mời kiểm tra lỗi và thực liện lại";
                }
            }
        }

        

        // Code...

        include "view/book/create.php";
    }

    public function showDetail($id)
    {
        echo "ID muốn xem chi tiết là: $id <hr>";
        if ($id !== "") {
            // Code... 

            include "view/book/detail.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }

    public function showUpdate($id)
    {
        if ($id !== "") {
            $product = $this->bookQuery->find($id);

            include "view/book/update.php";
        } else {
            echo "Lỗi: Không nhận được thông tin ID. Mời bạn kiểm tra lại. <hr>";
        }
    }
    public function deleteProduct($id){
        echo "ID muốn xóa là ID: $id";
        if($id!==""){
            // gọi model thực hiện xóa theo ID
            $result = $this->bookQuery->delete($id);
            if($result === "ok"){
                header("Location: ?act=book-list");
            }else{
                echo "Không xóa được bản ghi. Mời thực hiện lại";
            }
        }
    }
}
