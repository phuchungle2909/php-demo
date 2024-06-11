<?php
class BooksQuery
{
    public $pdo;
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=web2014_database_lab05x06", "root", "");
    }
    public function __destruct()
    {
        $this->pdo = null;
    }
    public function all()
    {
        try {
            $sql = "SELECT * FROM `books`";
            $data = $this->pdo->query($sql)->fetchAll();
            $list = [];
            foreach ($data as $key) {
                $bo = new Book();
              
                $bo->title = $key['title'];
                $bo->cover_image = $key['cover_image'];
                $bo->author = $key['author'];
                $bo->publisher = $key['publisher'];
                $bo->publish_date = $key['publish_date'];
                $list[] = $bo;
            }
            return $list;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function insert(Book $book)
    { {
            try {
                $sql = "INSERT INTO `books` (`id`, `title`, `cover_image`, `author`, `publisher`, `publish_date`) 
                                VALUES (NULL, '$book->title', '$book->cover_image', '$book->author', '$book->publisher', '$book->publish_date');";
                $data = $this->pdo->exec($sql);
            } catch (Exception $th) {
                echo "lỗi: " . $th->getMessage();
            }
        }
    }
    public function find($id)
    {
        try {
            $sql = "SELECT * FROM `books` WHERE `id` = $id";
            $data = $this->pdo->query($sql)->fetch();
            $bo = new Book();
            $bo->id = $data['id'];
            $bo->title = $data['title'];
            $bo->cover_image = $data['cover_image'];
            $bo->author = $data['author'];
            $bo->publisher = $data['publisher'];
            $bo->publish_date = $data['publish_date'];
            return $bo;
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
    public function update(Book $book)
    {
        try {
            $sql = "UPDATE `books` SET `title` = '$book->title', `cover_image` = '$book->cover_image', `author` = '$book->author', `publisher` = '$book->publisher', `publish_date` = '$book->publish_date' WHERE `books`.`id` = $book->id;";
            $data = $this->pdo->exec($sql);
        } catch (Exception $th) {
            echo "lỗi: " . $th->getMessage();
        }
    }
}
?>