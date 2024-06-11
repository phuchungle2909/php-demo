<?php

// Khai báo class WatchController
class WatchController
{
    // Khai báo thuộc tính
    // Code...
    public $WatchQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
        $this->WatchQuery = new WatchQuery();
    }


    public function __destruct()
    {
        // Code...
    }


    public function showList()
    {
        // Code...
        $danhSachWatch = $this->WatchQuery->all();
        // Hiển thị file view
        include "view/watch/list.php";
    } // END showList()


    public function showCreate()
    {
        $watch = new Watch();
        $thongBaoLoi ="";
        $thongBaoThanhCong="";
    
        if(isset($_POST["submitForm"])){
            $watch->name = trim($_POST["name"]);
            $watch->image_src = trim($_POST["image_src"]);
            $watch->brand = trim($_POST["brand"]);
            $watch->price = trim($_POST["price"]);
        
    
            if($watch->name === "" || $watch->brand === "" || $watch->price === ""){
                $thongBaoLoi = "Tên Sách, Tác Giả, Ngày Xuất Bản là thông tin bắt buộc. Mời bạn nhập đầy đủ thông tin";
            } else {
                // Insert into database
                $ketQua = $this->WatchQuery->insert($watch);
                if($ketQua === "success"){
                    $thongBaoThanhCong ="Bạn đã tạo mới thành công";
                    $watch = new Watch();
                } else {
                    $thongBaoLoi = "Tạo mới thất bại";
                }
            }
        }

        // Hiển thị file view
        include "view/watch/create.php";
    } // END showCreate()


    public function delete($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $ketQua = $this->WatchQuery->delete($id);
            if($ketQua === "success"){
                header("Location: ?act=watch-list");
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }


    public function showUpdate($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...

            // Hiển thị file view
            include "view/watch/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showUpdate()


}