<?php
// Bài 1:
function tinhMu($a,$n){
    return pow($a,$n);

}
// Bai 2:
$tour = [
[
    "ten " => "HN - Dien Bien",
"noi_di" => "HN",
"noi_den" => "Dien Bien",
"gia_tien" => 1000000,
"ngay_di" => "2025-05-10",
"ngay_ve" => "2025-05-15",
],
[
    "ten " => "HN - Sapa",
"noi_di" => "HN",
"noi_den" => "Sapa",
"gia_tien" => 1000000,
"ngay_di" => "2025-06-10",
"ngay_ve" => "2025-06-15",
],
[
    "ten " => "HN - Lao",
"noi_di" => "HN",
"noi_den" => "Lao",
"gia_tien" => 1000000,
"ngay_di" => "2025-07-10",
"ngay_ve" => "2025-07-15",
]

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Hiển thị kết qủa bài một -->
    <h1>Bài 1</h1>
    <p>a^n = <?php echo tinhMu(2,4); ?> </p>
    <!-- Hiển thị danh sách tuor -->
    <h2>Bài 2</h2>
    <table border = "1">
        <thead>
            <tr>
                <td>Tên</td>
                <td>Nơi đi</td>
                <td>Giá Tiền</td>
                <td>Ngày ĐI</td>
                <td>Ngày Về</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $ngayHienTai = strtotime("now");
            $mau="";
            $trangThai ="";

            foreach($listTour as $tour){
                $ngay_di = strtotime($tour["ngay_di"]);
                if($ngay_di >= $ngayHienTai){
                    $trangThai ="Có Thể Đặt";
                    $mau = "Gree";
                }
                else{
                    $trangThai="Không đặt được";
                    $mau = "red";
                }
            ?>
            <tr>
                <td><?php echo $tour["ten"];?></td>
                <td><?php echo $tour["noi_di"];?></td>
                <td><?php echo $tour["noi_den"];?></td>
                <td><?php echo $tour["gia_tien"];?></td>
                <td><?php echo $tour["ngay_di"];?></td>
                <td><?php echo $tour["ngay_ve"];?></td>
                <td>Không Thể đặt được</td>
              
            </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>