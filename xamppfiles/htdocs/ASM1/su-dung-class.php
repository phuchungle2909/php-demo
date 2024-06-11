<?php
    include_once "NewsQuery.php";
    include_once "News.php";
    $newsQuery = new NewsQuery();
    echo "Chi tiết sản phẩm <br/>";
    $news01 = $newsQuery->find(1);
    var_dump($news01);
    echo "<br/>";

    echo "Danh sách sản phẩm <br>";
    $news02 = $newsQuery->all();
    var_dump($news02);
    echo "<hr>";

    echo "Sửa sản phẩm<br>";
    $Newsobject = new NewsQuery();
    $Newsobject->id = 2;
    $Newsobject->title = "Giày thể thao";
    $Newsobject-> image_src = "anh";
    $Newsobject->description = "đẹp";
    $dataSua = $newsQuery->update($Newsobject);
    var_dump($dataSua);
    echo"<hr>";


?>