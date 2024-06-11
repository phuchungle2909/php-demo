<?php
class CourseQuery
{
    // Khai báo thuộc tính
    public $pdo;

    // Khai báo phương thức
    public function __construct()
    {
        try {
            $this->pdo = new PDO ("mysql:host=localhost;port=3306;dbname=hung_dep_trai_vch", "root", "");
            echo "Kết nối CSDL thành công <hr>";
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
        $this->pdo = null;
    }


    public function all()
    {
        // Khai báo try catch
        try {
            // 1. Khai báo câu sql
            // Code...
            $sql= "SELECT * FROM `course`";

            // 2. Thực hiện truy vấn
            // Code...
            $data = $this->pdo->query($sql)->fetchAll();

            // 3. Convert array data sang object data
            // Code...
            $danhSach = [];
            foreach ($data as $value){
                $course= new Course();
                $course->id = $value["id"];
                $course->name = $value["name"];
                $course->thumbnail = $value["thumbnail"];
                $course->instructor = $value["instructor"];
                $course->duration = $value["duration"];
                $course->price = $value["price"];

                array_push($danhSach, $course);
            }

            // 4. Return kết quả
            // Code...
            return $danhSach;

        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM `course` WHERE id = $id";
            $data = $this->pdo->exec($sql);
            if($data ===1){
                return "success";
            }
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi kết nối CSDL: " . $error->getMessage();
            echo "</h1>";
        }
    }


}
