<?php
    // Muốn sử dụng code trong file khác -> phải nhúng file vào file khác
    // include "duong_dan_file_can_nhung"
    //  
    include "OOP.php";
    // include "file_dinhNghia.php";
    // include "PHP1/day2/chuabtvn.php";

    // Sử dụng class
    //  Khởi tạo object sinh viên
    $sinhVien01 = new SinhVien();

    // Gán giá trị cho thuộc tính của object $sinhVien01
    $sinhVien01 -> hoVaTen = "Lưu Đức Hải";
    $sinhVien01 -> namSinh = 20005;
    $sinhVien01 -> maSinhVien = "PH49029";
    $sinhVien01 -> email = "haildph49029gmail.com";
    
    
    // Gọi phương thứ của đối tượng\
    $sinhVien01 ->gioiThieuBanThan();
    // 
    //
?>