<?php
include_once "MayTinh.php";
class MayTinhQuery {
    public $pdo;
    public function __construct(){
        try{
        $this -> pdo = new PDO("mysql:host=localhost;port=3306; dbname=web2014_database_lab03x04","root","");
        echo "Kết nối thành công";
    } catch(Exeption $e){
        echo "Loi". $e ->getMassage();

    }
    }
    public function __destruct(){
        $this -> pdo = null;
    }
    // public function insert(mayTinh $object){
    //     try{
    //         $sql = "INSERT INTO 'maytinh' ('id', 'name', 'brand', 'price', 'quantity')
    //         Values (NULL,'3', 'hưngMc', 'Mc Hưng', '13', '14');";
    //         $data = $this -> pdo -> exec ($sql);
    //         return $data
    //     } catch(Exception $e) {

    //     }
    // }
    // public function all (){
    //     try{
    //         $sql = "SELECT * FROM ',mayTinh' ";
    //         $data = $this ->pdo ->esec ($sql);
    //         $listMayTinh = [];
    //         foreach ($data as $key ){
    //             $list = new mayTinh();
    //             $list ->id = $key ["id"];
    //             $list ->name = $key ["name"];
    //             $list ->brand = $key ["brand"];
    //             $list ->price = $key ["price"];
    //             $list ->quantity = $key ["quantity"];
                
                
                

    //         }
    //     }
    }

?>
