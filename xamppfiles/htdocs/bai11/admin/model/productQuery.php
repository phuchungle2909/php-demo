<?php
class productQuery{
    public $pdo;
    public function __construct()
    {
        try{
            $this->pdo= new PDO("mysql:host=localhost;post=3306;dbname=web2014_demo_mvc_database02","root","");
            echo "Kết nối CSDL thành công <hr>";

        }  catch(Exception $e){
            echo "Error:" .$e->getMessage();
            echo"<hr>";
        }   
    }
    public function __destruct()
    {
        $this->pdo= null;
    }
    public function all(){
        try{
            $sql ="SELECT * FROM `product`";
            $data = $this->pdo->query($sql)->fetchAll();
            // echo "<pre>";
            // print_r($data);
        $danhSachObjectProduct=[];
        foreach($data as $row){
            $object = new product();
            $object->id = $row['id'];
            $object->name = $row['name'];
            $object->price = $row['price'];
            $object->image_src = $row['image_src'];
            $object->created_date = $row['created_date'];
        $danhSachObjectProduct[]=$object;
        
            
        }
        return $danhSachObjectProduct;

        } catch(Exception $e){
            echo "Error:" .$e->getMessage();
            echo"<hr>";
        }  

    }
    public function insert(Product $object){
        try{
            $sql="INSERT INTO `product` (`id`, `name`, `price`, `image_src`, `created_date`)
             VALUES (NULL,'$object->name', '$object->price', '$object->image_src', '$object->created_date')
            ";
            $data =$this->pdo->exec($sql);
            if($data ===1){
                return "ok";
            }
        }catch(Exception $e){
            echo "Error:". $e->getMessage();
            echo"<hr>";
        }
        
    }
    
}
?>