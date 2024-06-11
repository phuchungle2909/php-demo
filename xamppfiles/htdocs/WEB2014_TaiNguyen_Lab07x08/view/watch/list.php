<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Tiêu đề trang -->
    <h3>Trang Danh Sách</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Đinh danh</th>
                <th>Tên đồng hồ</th>
                <th>Ảnh đại diện</th>
                <th>Thương hiệu</th>
                <th>Giá Bán</th>
                <th>Tương Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($danhSachWatch as $watch) {?>
            <tr>
                <td><?= $watch->id ?></td>
                <td><?= $watch->name ?></td>
                <td></td>
                <td><?= $watch->brand ?></td>
                <td><?= $watch->price ?></td>
                <td>
                    <a href="">Sửa </a>
                    <a href="?act=watch-delete&id=<?= $watch->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')">Xóa</a>
                </td>
                
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div>
        <a href="?act=watch-create">Trang Tạo Mới</a>
    </div>



</body>

</html>