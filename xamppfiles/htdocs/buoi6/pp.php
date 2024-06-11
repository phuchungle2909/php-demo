<?php
class ProductQuery
{
    // khai báo thuộc tính 
    public $pdo;
    public function __construct()
    {
        // khi mà khởi tạo productQuery -> mở kết nối đến CSDL
        // $pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_demo_01", "root", "dung123");
        // echo "kết nối không thành công <br>";
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_demo_01", "root", "");
            echo "kết nối thành công <br>";
        } catch (Exception $a) {
            // xử lý lỗi
            echo "lỗi: " . $a->getMessage();
        }
    }
    public function __destruct()
    {
        // dùng để ngắt kết nối khi ko dùng
        $this->pdo = null;
    }

    // lấy thông tin chi tiết sản phẩm

    public function find($id)
    {
        echo "gọi hàm find()<br>";
        try{
            // 1. khai báo câu lệnh sql lấy thông tin chi tiết
            $sql = "SELECT * FROM `product` WHERE id = $id;";

            // 2. Thực thi truy vấn và lấy giá trị trả về
            $data = $this->pdo->query($sql)->fetch();
            var_dump($data);
        }catch (Exception $error) {
            echo "Lỗi :" . $error->getMessage();
            echo "<br>";

        }

    }
}
?>