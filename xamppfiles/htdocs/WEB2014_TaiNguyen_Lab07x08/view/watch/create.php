<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<!-- 1. Tiêu đề trang -->
<h3>Trang Tạo Mới</h3>
<form action="" method="POST">
<div style="margin-bottom: 16px;">
<span>Tên Đồng Hồ :</span>
<input type="text" name="name" value="<?=$watch->name?>">
</div>
<div style="margin-bottom: 16px;">
<span>Ảnh đại diện :</span>
<input type="text" name="image_src" value="<?=$watch->image_src?>">
</div>
<div style="margin-bottom: 16px;"> 
<span>Thương Hiêu :</span>
<input type="text" name="brand" value="<?=$watch->brand?>">
</div>
<div style="margin-bottom: 16px;">
<span>Giá Bán :</span>
<input type="text" name="price" value="<?=$watch->price?>">
</div>
<div style="margin-bottom: 16px;">
<a href="?act=watch-list">Quay Lại</a>
<button type="submit" name="submitForm">Tạo Mới</button>
</div>
<div style="color: red;">
<?= $thongBaoLoi?>
</div>
<div style="color: green;">
<?= $thongBaoThanhCong?>
</div>
</form>
</body>
</html>