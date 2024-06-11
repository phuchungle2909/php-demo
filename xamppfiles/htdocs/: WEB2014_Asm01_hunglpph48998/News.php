<?php
class News{
    public $id;
    public $title;
    public $image_src;
    public $description;

    public function __contruct() {}

    public function __destruct() {}
    public function __displayProductInfo(){
        echo"'id'.$this->id.'<br>'";
        echo"'title'.$this->title.'<br>'";
        echo"'image_src'.$this->image_src.'<br>'";
        echo"'description'.$this->description.'<br>'";

    }

   

}
?>