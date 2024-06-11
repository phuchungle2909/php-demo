<?php
echo "<pre>";
include_once "News.php";
class NewsQuery {
    
 
        public $pdo;
    
        public function __construct() {
    
            try {
                $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2015_database_asm01", "root", "");
                echo "//Kết nối CSDL thành công<br>";
            } catch (Exception $e) { 
                echo "//Lỗi: " . $e->getMessage();
                echo "<br>";
            }
        }
        public function __destruct() {
            
            $this->pdo = null;
        }
    
        public function find($id) {
            echo "Gọi hàm find() <br>";
            try {
                
                $sql = "SELECT * FROM news WHERE id = $id;";
    
                $data = $this->pdo->query($sql)->fetch();
            
                if ($data !== false) {
                   
                   $product = new News();
                   $product->id = $data['id'];
                   $product->title = $data['title']; 
                   $product->imageSrc = $data['imageSrc'];
                   $product->description = $data['description'];
                   return $product;
                } else { 
                    echo "Bản khi không tồn tại. Vui lòng kiểm tra lại";
                    return;
                }
    
            } catch(Exception $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }
    
        public function all() {
            try {
                $sql = "SELECT * FROM `news`";
    
                
                $data = $this->pdo->query($sql)->fetchAll();
                
                $danhSachObject = [];
                foreach($data as $row) {
                    $object = new News();
                    $object->id = $row['id'];
                    $object->title = $row['title'];
                    $object->imageSrc = $row['imageSrc'];
                    $object->description = $row['description'];
    
                    $danhSachObject[] = $object;
                }
                return $danhSachObject;
    
            } catch(Exception $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        }
    
}
?>