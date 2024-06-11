<?php
// 1. Nhúng các file cần thiết
include_once "model/Watch.php";
include_once "model/WatchQuery.php";
include_once "controller/WatchController.php";


// 2. Lấy các giá trị cần thiết từ đường dẫn url
// Lấy giá trị "act" từ đường dẫn url
$act = "";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
}

// Lấy giá trị "id" từ đường dẫn url
$id = "";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}


// 3. Kiểm tra giá trị "act" và gọi xuống controller tương ứng
switch ($act) {
    case "":
        // Điều hướng sang trang mặc định (trang danh sách) nếu người dùng không truyền "act"
        header("Location: ?act=watch-list");
        break;

    case "watch-list":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $watchCtrl = new WatchController();
        $watchCtrl->showList();
        break;

    case "watch-delete":
        // Gọi xuống controller để xử lý logic
        $watchCtrl = new WatchController();
        $watchCtrl->delete($id);
        break;

    case "watch-create":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $watchCtrl = new WatchController();
        $watchCtrl->showCreate();
        break;

    case "watch-update":
        // Gọi xuống controller để xử lý logic và hiển thị file view
        $watchCtrl = new WatchController();
        $watchCtrl->showUpdate($id);
        break;

    default:
        // Hiển thị "trang 404 fage not found" nếu giá trị "act" không nằm trong danh sách phía trên.
        // Lưu ý: Gặp lỗi này phải kiểm tra ngay giá trị act trên đường dẫn url, xem xem có gõ sai chính tả không. Chứ gõ sai chính tả thì buồn lắm luôn...
        include "view/404.php";
        break;
}
