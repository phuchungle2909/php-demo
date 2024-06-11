<?php
class productcontroller{
    public function _construct(){}
    public function _destruct(){}

    // ?act=listpro => hien thi file product/list.php
    public function showList(){
        include "veiw/Product/list.php";
 }
 // ?act=detailpro&id=2 =>product/creat

}

?>
