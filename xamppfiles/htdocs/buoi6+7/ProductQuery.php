<?php
include_once "Product.php";

class ProductQuery {
    // Thuộc tính
    public $pdo;

    public function __construct() {
        // Sử dụng PDO kết nối CSDL
        // 1. Không sử dụng try_catch
        // $pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_demo_01", "root", "hihi");
        // echo "//Kết nối CSDL thành công<br>";
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_demo_01", "root", "");
            echo "//Kết nối CSDL thành công<br>";
        } catch (Exception $e) { 
            echo "//Lỗi: " . $e->getMessage();
            echo "<br>";
        }
    }
    public function __destruct() {
        // ĐÓng kết nối với cơ sở dữ liệu
        $this->pdo = null;
    }

    public function find($id) {
        echo "Gọi hàm find() <br>";
        try {
            // 1. Khai báo câu sql lấy thông tin chi tiết
            $sql = "SELECT * FROM product WHERE id = $id;";

            // 2. Thực hiện câu lệnh và lấy giá trị trả về
            // fetch() lấy 1 dòng dữ liệu
            $data = $this->pdo->query($sql)->fetch();
            // var_dump($data);
            // echo "<br>";
            // 3. Convert dữ liệu sang object
            // Kiểm tra xem bản ghi tồn tại trong CSDL không
            if ($data !== false) {
               // Convert data sang object Product
               $product = new Product();
               $product->id = $data['id'];
               $product->ten = $data['name']; 
               $product->gia = $data['price'];
               $product->soLuong = $data['quantity'];
               return $product;
            } else { 
                echo "Bản khi không tồn tại. Vui lòng kiểm tra lại";
                return;
            }

        } catch(Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function all (){
        try{
            $sql = "SELECY * FROM 'product' ";
            
            //fetchALL () LAy nhieu dong du lieu
            $data = $this->pdo->query($spl)->fetchALL();
            // echo "<pre>";
            // print_r($data); 
            $danhSachObject =[];
            foreach ($data as $row){
                $object = new product();
                $object->id = $row ['id'];
                $object->ten = $row ['name'];
                $object->gia = $row ['price'];
                $object-> soLuong= $row ['quantity'];

                $danhSachObject[] = $object;


            }
            return $danhSachObject;

        }catch(Exceptiom $e){
             echo"loi: . $e->getMessage";
            
        }
    } 
    public function insert (product $product){
        try {
            $spl = "INSERT INTO ' product' ('id', 'name', 'price', 'quantity')
            VALUES(Null,'$product->ten', '$product->gia', '$product->soLuong); ";
            
            var_dump($sql);
            $data = $this->pdo->exec($sql);
            // $data =1: neu thuc thi duoc lenh dung
            // neu cau lenh sai nhay vao vong catch
            return $data;

        }
        catch(Exception){
            echo"Loi".$e->getMessage();
            
        }
    }
}
?>