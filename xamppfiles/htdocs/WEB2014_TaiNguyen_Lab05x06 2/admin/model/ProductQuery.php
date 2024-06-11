<?php
    class ProductQuery {
        public function __construct()
        {
            try {
                $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_lab05x06", "root", "");
                echo "Kết nối CSDL thành công <hr>";
            } catch(Exception $e){
                echo "Lỗi: " . $e->getMessage();
                echo "<hr>";
            }
        }
        public function all() {
            try {
                $sql = "SELECT * FROM `books`";

                $data = $this->pdo->query($sql)->fetchAll();
                $danhSachObjectProduct = [];
                foreach($data as $row) {
                    $object = new Product();
                    $object->id = $row['id'];
                    $object->title = $row['title'];
                    $object->cover_image = $row['cover_image'];
                    $object->author = $row['author'];
                    $object->publisher = $row['publisher'];
                    $object->publish_date = $row['publish_date'];

                    $danhSachObjectProduct[] = $object;
                }

                return $danhSachObjectProduct;

            } catch(Exception $e) { 
                echo "Error: " . $e->getMessage();
                echo "<hr>";
            }
        }
        public function insert(Product $object) {
            try {
                $sql = "INSERT INTO `books` (`id`, `title`, `cover_image`, `author`, `publisher`, `publish_date`) 
                VALUES (NULL, '$object->title', '$object->cover_image', '$object->author', '$object->publisher', '$object->publish_date');";
                $data = $this->pdo->exec($sql);
                // $data = 1 nếu thực hiện thành công
                if ($data === 1) {
                    return "ok";
                }
                
            } catch(Exception $e) { 
                echo "Error: " . $e->getMessage();
                echo "<hr>";
            }
        }
        public function delete($id){
            try{
                $sql = "DELETE FROM `books` WHERE `id` = $id";
                $data= $this->pdo->exec($sql);
                // $data =1 nếu thành công
                if($data ==1){
                    return "ok";
                }
                return $data;

            }catch(Exception $e){
                echo "Lỗi: " .$e->getMessage();
                echo "<hr>";
            }
        }
        public function update(Product $product) {
            try {
                $sql = "UPDATE `books` SET `name` = '$product->title', 
                `cover_image`='$product->cover_image', 
                `author`='$product->author', 
                `publisher`='$product->publisher',`publish_date`='$product->publish_date' WHERE `product`.`id` = $product->id;";
                $data = $this->pdo->exec($sql);
                // nếu thực hiện thành công $data =1 hoặc $data = 0
                if ($data === 1 || $data===0) {
                    return "ok";
                }
                return $data;
            } catch(Exception $e) { 
                echo "Error: " . $e->getMessage();
                echo "<hr>";
            }
        }
        
    }