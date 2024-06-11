<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tiêu đề trang -->
    <h3>Trang Tạo Mới Sản Phẩm</h3>

    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Khu vực nhập tên -->
        <div style="margin-bottom: 16px;">
            <span>Nhập tên sách:</span>
            <input type="text" name="title" >
        </div>
        <!-- Khu vực Tác giả -->
        <div style="margin-bottom: 16px;">
            <span>Nhập Tác giả:</span>
            <input type="text" name="author" >
        </div>
        <!-- Khu vực Tác giả -->
        <div style="margin-bottom: 16px;">
            <span>Nhập Tác giả:</span>
            <input type="text" name="publisher" >
        </div>
        <!-- Khu vực nhập ngày tạo -->
        <div style="margin-bottom: 16px;">
            <span>Nhập ngày tạo:</span>
            <input type="date" name="publish_date" >
        </div>
        <!-- Khu vực ảnh -->
        <div style="margin-bottom: 16px;">
            <div>
                <span>Đường dẫn ảnh:</span>
                <input type="text" name="cover_image">
            </div>
            <div>
                <span>Chọn ảnh:</span>
                <input type="file" name="file_upload">
            </div>
        </div>
        <!-- Khu vực nút -->
        <div style="margin-bottom: 16px;">
            <button type="submit" name="submitForm">Tạo mới</button>
        </div>
        <!-- Khu vực thông báo lỗi -->
        <div style="margin-bottom: 16px; color: red">
            <?= $thongBaoLoi ?>
        </div>
        <!-- Khu vực thông báo thành công-->
        <div style="margin-bottom: 16px; color: green">
            <?= $thongBaoThanhCong ?>
        </div>
    </form>

    <!-- Khu vực link điều hướng -->
    <div>
        <a href="?act=product-list">Quay Lại</a>
    </div>


</body>

</html>