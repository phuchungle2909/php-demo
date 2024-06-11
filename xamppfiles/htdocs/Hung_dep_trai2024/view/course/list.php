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
    <div>
        <a href=""></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Đinh danh</th>
                <th>Tên khóa học</th>
                <th>Hình ảnh thu nhỏ</th>
                <th>Giảng viên</th>
                <th>Thời lượng khóa học (giờ)</th>
                <th>Giá khóa học</th>
                <th>Tương tác</th>
            </tr>
        </thead>
        <?php foreach ($danhSachCourse as $course) { ?>
                <tr>
                    <td> <?= $course->id ?> </td>
                    <td> <?= $course->name ?> </td>
                    <td>
                        <div style="height: 60px; width: 60px; border: 1px solid gray;">
                            <img style="max-height: 100%; max-width: 100%;" src="<?= $course->thumbnail ?>">
                        </div>
                    </td>
                    <td> <?= $course->instructor ?> </td>
                    <td> <?= $course->duration ?> </td>
                    <td> <?= $course->price ?> </td>
                    <td>
                        <a href="?act=course-update&id=<?= $course->id ?>">Sửa</a>
                        <a href="?act=course-delete&id=<?= $course->id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi?')">Xóa</a>
                        <!-- Đã thành công, có confirm hẳn hoi. Thầy cho em xin 1 điểm -->
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Đã hoàn thiện tính năng danh sách. Thầy cho em xin 3 điểm -->

    <!-- 3. Khu vực điều hướng -->
    <div>
        <a href="?act=book-create">Trang tạo mới</a>
    </div>


    </table>
    <form action="">
        
    </form>



</body>

</html>