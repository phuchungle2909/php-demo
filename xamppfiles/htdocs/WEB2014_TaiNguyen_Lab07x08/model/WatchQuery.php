<?php
class WatchQuery
{
    // Khai báo thuộc tính
    public $pdo;

    // Khai báo phương thức
    public function __construct()
    {
        try {
            // 1. Kết nối CSDL
            // Code...
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_lab07x08","root","");
            echo ("Bạn đã Kết nối CSDL Thành công.<hr>");

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
            $sql = "SELECT * FROM `watch`";
            // 1. Khai báo câu sql
            // Code...

            // 2. Thực hiện truy vấn
            // Code...
            $data = $this->pdo->query($sql)->fetchAll();

            // 3. Convert array data sang object data
            // Code...
            $danhSachObject = [];
            foreach($data as $value){
                $watch = new Watch();
                $watch->id = $value ["id"];
                $watch->name = $value ["name"];
                $watch->image_src = $value ["image_src"];
                $watch->brand = $value ["brand"];
                $watch->price = $value ["price"];

                array_push($danhSachObject, $watch);
            }

            // 4. Return kết quả
            // Code...
            return $danhSachObject;

        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()
    public function delete($id){
        try{
            $sql="DELETE FROM `watch` WHERE id = $id";
            $data = $this->pdo->exec($sql);
            if($data === 1){
                return "success";
            }
        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm delete trong model: " . $error->getMessage();
            echo "</h1>";
        }
    }
    public function insert(Watch $watch){
        try{
            $sql="INSERT INTO `watch` (`id`, `name`, `image_src`, `brand`, `price`) 
            VALUES (NULL, '$watch->name', '$watch->image_src', '$watch->brand', '$watch->price')";
            $data = $this->pdo->exec($sql);
            if($data === 1){
                return "success";
            }
        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm delete trong model: " . $error->getMessage();
            echo "</h1>";
        }
    }
}