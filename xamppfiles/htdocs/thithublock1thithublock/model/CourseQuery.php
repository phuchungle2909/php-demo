<?php
class CourseQuery
{
    // Khai báo thuộc tính
    public $pdo;

    // Khai báo phương thức
    public function __construct()
    {
        try {
            // 1. Kết nối CSDL
            // Code...

        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi kết nối CSDL: " . $error->getMessage();
            echo "</h1>";
        }
    }
    public function __destruct()
    {
        // Đóng kết nối với CSDL
        // Code...
    }


    public function all()
    {
        // Khai báo try catch
        try {
            // 1. Khai báo câu sql
            // Code...

            // 2. Thực hiện truy vấn
            // Code...

            // 3. Convert array data sang object data
            // Code...

            // 4. Return kết quả
            // Code...

        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()

}
