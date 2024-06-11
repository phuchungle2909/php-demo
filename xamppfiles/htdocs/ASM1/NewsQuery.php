<?php
include_once "News.php";
class NewsQuery{
    public $pdo;

    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname= web2020_database_asm01", "root", "");
            echo "//Kết nối CSDL thành công <br>";
        }catch(EXception $e){
            echo"//Lỗi: ". $e->getMessage();
            echo "<br>";
        }
    }
    public function __destruct(){
        $this->pdo = null;
    }
    public function insert(News $news) {
        try {
            $sql = "";
            $data = $this->pdo->exec($sql);
            return $data; 
        } catch(Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function find($id){
        echo "Gọi hàm find() <br>";
        try{
            $sql = "SELECT * FROM `news` WHERE id = $id;";
            var_dump($sql);
            $data = $this->pdo->query($sql)->fetch();
            if($data !== false){
                $News = new NewsQuery();
                $News->id = $data['id'];
                $News->tieude = $data['title'];
                $News->anh = $data['image_src'];
                $News->mota = $data['description'];
                return $News;

            }else{
                echo "Bản ghi không tồn tại. Vui lòng kiểm tra lại!";
                return;
            }
        }catch(Exception $e){
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function all(){
        try{

            $sql ="SELECT * FROM `news`";
            $data = $this->pdo->query($sql)->fetchAll();
            $danhSach =[];
            foreach($data as $row){
                $news = new News();
                $news -> id = $row['id'];
                $news -> title = $row['title'];
                $news -> image_Src = $row['image_src'];
                $news -> description = $row['description'];
                $danhSach[] = $news;
            }
            return $danhSach;
        }catch(Exception $e){
            echo "Lỗi: ". $e->getMessage();
        }
    }
    public function update(NewsQuery $news){
        try{
            $sql ="UPDATE `news` SET `title` = '$news->title', `image_src` = '$news->image_src', 
            `description` = '$news->description' WHERE `news`.`id` = $news->id;";
            $data = $this->pdo->exec($sql);
            return $data;

        }catch(Exception $e){
            echo"Lỗi: " . $e->getMessage();
        }
    }
    public function delete($id){
        try{
            $sql=  "DELETE FROM `news` WHERE `news`.`id` = $id";
            $data = $this->pdo->exec($sql);
            return $data;

        }catch(Exception $e){
            echo "Lỗi: ". $e->getMessage();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        }
    }
}
?>