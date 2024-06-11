<?php
// III. Khai thác class.
// -Tên file dạng upperCamelCase
// - Tên class viết dạng upperCamelCase
// - Tên thuộc tính viết dạng lowerCamelCase
// - Tên phương thức viết dạng lowercamelCase

// Cú pháp : class TenClass
class sinhVien{
    // Khai báo thuộc tính
    // cú pháp acess_level+$tenthuoctinh.
    // Access_level: privale, default, protected, public

    public $hoVaTen;
    public $namSinh;
    public $maSinhVien;
    public $sdt;
    public $diaChi;

    // Khai báo phương thức
    // 1. phương thức mạc đinh, luôn luôn phải có.
    public function _contruct(){
        // hàm gọi sau khi gọi câu lệnh object
        // Nội dung hàm để khai báo giá trị mạc định khi cần
    }

    public function _destuct(){
    // HÀM chạy sau khi 0 còn use object
    // Dùng để xoá, reset biến, giải phóng bộ nhớ,
}
//2. Các phương thức khác đại diện của hành động object 

public function gioiThieuBanThan(){
    // Lấy các thuộc tính trong class
    // cú pháp: $this->tenThuocTinh

    echo "thông tin cá nhân:<br>";
    echo "Họ Tên" . $this ->hoVaTen . "<br>";
    echo "Năm sinh " . $this ->namSinh. "<br>";
    echo "Tuoi"

}



}
?>