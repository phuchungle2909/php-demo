<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tiêu đề trang -->
    <h3>Trang Danh Sách Sản Phẩm</h3>


    <!-- Khu vực điều hướng -->
    <div>
        <a href="?act=product-create">Trang tạo mới</a>
    </div>
    <?php
        echo "<pre>";
        print_r($danhSachsp);
    ?>
    <!-- Khu vực hiển thị dữ liệu -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Ảnh</th>
                <th>Ngày tạo</th>
                <th>Tương tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($danhSachsp as $sp) :?>
                <tr>
                    <td><?= $sp->id ?></td>
                    <td><?= $sp->name ?></td>
                    <td><?= $sp->price ?> </td>
                    <td>
                        <div style="height: 100px; width:200px;" >
                            <img src="<?= BASE_URL.$sp->image_src ?>" 
                            alt="" style="max-width: 100%; max-height: 100%">
                        </div>
                    </td>
                    <td><?= $sp->created_date ?></td>
                    <td>
                        <a href="?act=product-update&id=<?= $sp->id ?>">Sửa</a>
                        <a href="?act=product-delete&id=<?= $sp->id ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>