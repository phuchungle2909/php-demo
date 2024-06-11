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
        <!-- Khu vực nhập tên  -->
        <div style="margin-bottom: 16px;">
            <span>Nhập tên sản phẩm:</span>
            <input type="text" name="name">

        </div>
        <!-- Khu vực nhập giá -->
        <div style="margin-bottom: 16px;">
            <span>Nhập giá sản phẩm:</span>
            <input type="number" name="price">

        </div>
         <!-- Khu vực ngày tạo  -->
         <div style="margin-bottom: 16px;">
            <span>Nhập ngày tặng:</span>
            <input type="date" name="created_date">

        </div>
        <!-- Khu vực ảnh -->
        <div style="margin-bottom: 16px;">
        <div>
            <span>Đường dẫn ảnh:</span>
            <input type="text" name="image_src">
        </div>
        <div>
            <span> Chọn ảnh</span>
            <input type="file" name="file_upload">
        </div>
        <!-- Khu vực nút -->
        <div style="margin-bottom: 16px;">
    <button type="submit" name="submitForm">Tạo mới</button>
</div>
<div style="margin-bottom: 16px; color: blue"
    ><?$thongBaoLoi?></div>
<!-- Khu vực báo lỗi -->
<div style="margin-bottom: 16px; color: red">
<?=$thongBaoThanhCong?>
</div>



    </form>


    <!-- Khu vực link điều hướng -->
    <div>
        <a href="?act=product-list">Quay Lại</a>
    </div>


</body>

</html>