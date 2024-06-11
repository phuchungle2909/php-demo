<?php
    class ProductQuery {
        public $pdo ;

        public function __construct() {
            try {
                $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_demo_mvc_database01", "root", "");
                echo "Kết nối CSDL thành công <hr>";
            } catch(Exception $e) { 
                echo "Error: " . $e->getMessage();
                echo "<hr>";
            }
        }
        public function __destruct() {
            $this->pdo = null;
        }

        public function all() {
            try {
                $sql = "SELECT * FROM `product`";

                $data = $this->pdo->query($sql)->fetchAll();
                // echo "<pre>";
                // print_r($data);
                $danhSachObjectProduct = [];
                foreach($data as $row) {
                    $object = new Product();
                    $object->id = $row['id'];
                    $object->name = $row['name'];
                    $object->price = $row['price'];
                    $object->image_src = $row['image_src'];
                    $object->created_date = $row['created_date'];

                    $danhSachObjectProduct[] = $object;
                }

                return $danhSachObjectProduct;

            } catch(Exception $e) { 
                echo "Error: " . $e->getMessage();
                echo "<hr>";
            }
        }
    }
?>