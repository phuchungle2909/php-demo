<?php
// 1. Nhúng các file cần thiết
include_once "controller/BookController.php";


// 2. Lấy các giá trị cần thiết từ đường dẫn url
// 2.1. Lấy giá trị param "act"
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}

// 2.2. Lấy giá trị "id"
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}


// 3. Kiểm tra giá trị "act"
switch ($act) {
    case "":
        header("Location: ?act=book-list");
        break;

    case "book-list":
        $productCtrl = new BookController();
        $productCtrl->showList();
        break;

    case "book-create":
        $productCtrl = new BookController();
        $productCtrl->showCreate();
        break;

    case "book-detail":
        $productCtrl = new BookController();
        $productCtrl->showDetail($id);
        break;

    case "book-update":
        $productCtrl = new BookController();
        $productCtrl->showUpdate($id);
        break;

    default:
        include "view/404.php";
        break;
}
