<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Tiêu đề trang -->
    <h3>Trang Danh Sách Sản Phẩm</h3>
    <div>
        <a href="?act=book-create">Trang tạo mới</a>
    </div>
    <?php
    echo "<pre>";
    print_r($danhSachsp);
    ?>
    <!-- Khu vực hiển thị dữ liệu -->
    <table border="1">
        <thead>
            <tr>
                <th>Định danh</th>
                <th>Tên sách</th>
                <th>Hình ảnh bìa sách</th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Ngày xuất bản</th>
                <th>Tương tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($danhSachsp as $sp) :?>
                <tr>
                    <td><?= $sp->id ?></td>
                    <td><?= $sp->title ?></td>
                    <td><?= $sp->cover_image ?></td>
                    <td><?= $sp->author ?></td>
                    <td><?= $sp->publisher ?></td>
                    <td><?= $sp->publish_date ?></td>
                    <td>
                        <a href="?act=book-update&id=<?= $sp->id ?>">Sửa</a>
                        <a href="?act=book-delete&id=<?= $sp->id ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>