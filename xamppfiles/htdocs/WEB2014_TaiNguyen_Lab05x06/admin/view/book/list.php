<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="?act=book-create">Trang tạo mới</a>
    <!-- 1. Tiêu đề trang -->
    <h3>Trang Danh Sách Sản Phẩm</h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Thương hiệu</th>
                <th>Nhà xuất bản</th>
                <th>Ngày xuất bản</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all as $key): ?>
                <tr>
                    <td><?= $key->id ?></td>
                    <td><?= $key->title ?></td>
                    <td><?= $key->cover_image ?></td>
                    <td><?= $key->author ?></td>
                    <td><?= $key->publisher ?></td>
                    <td><?= $key->publish_date ?></td>
                    <td>
                        <a href="?act=book-update&id=<?= $key->id ?>">Sửa,</a>
                        <a href="?act=book-delete&id=<?= $key->id ?>">Xóa</a>
                    </td>
                </tr>

                <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>