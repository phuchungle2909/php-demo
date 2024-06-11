<?php

// Khai báo class CourseController
class CourseController
{
    // Khai báo thuộc tính
    // Code...
    public $CourseQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
        $this->CourseQuery = new CourseQuery();
    }


    public function __destruct()
    {
        // Code...
    }


    public function showList()
    {
        // Code...
        $danhSachCourse = $this->CourseQuery->all();

        // Hiển thị file view
        include "view/course/list.php";
    } // END showList()


    public function showCreate()
    {
        // Code...

        // Hiển thị file view
        include "view/course/create.php";
    } // END showCreate()


    public function delete($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $ketQua= $this->CourseQuery->delete($id);
            if($ketQua ==="success"){
                header("Location:?act=course-list");
            }else{
                echo"Lỗi: Xóa không thành công";
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
            include "view/course/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showUpdate()


    public function showDetail($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...

            // Hiển thị file view
            include "view/course/detail.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showDetail()


}
