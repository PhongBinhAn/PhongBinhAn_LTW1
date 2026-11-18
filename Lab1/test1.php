<?php
//Su dung comment (single-line va multi-line) trong chuong trinh de chu thich ma nguon.
/*
    comment nhieu dong
    123123123123123123
*/
    //CAU 1
    echo "<h3>1.Thong tin ca nhan</h3>";
    echo "Ho ten sinh vien : Phong Binh An <br>";
    echo "Ngay sinh : 20/02/2005 <br>";
    echo "MSSV : 2125110129 <br>";
    //CAU 2 
    $hoten="Phong Binh An";
    $mmsv="2125110129";
    $sdt="0987197277";
    $ngaysinh="20/02/2005";
    echo "<h3>2.Khai bao bien va in thong tin</h3>";
    echo "Ho ten : $hoten <br>";
    echo "Ma so sinh vien : $mssv <br>";
    echo "So dien thoai : $sdt <br>";
    echo "Ngay sinh : $ngaysinh <br>";
    //CAU 3 
    echo "<h3>3.Khai báo các hằng số lưu thông tin kết nối</h3>";
    define("HOST","local_host");
    define("DATABASE","ql_nhaxe");
    define("USERNAME","admin");
    define("PASSWORD","123123");
    echo "HOST : " .HOST. "<br>";
    echo "DATABASE : " .DATABASE. "<br>";
    echo "USERNAME : " .USERNAME. "<br>";
    echo "PASSWORD : " .PASSWORD. "<br>";
    //CAU 4 
    echo "<h3>Viết ví dụ sự khác nhau giữa chuỗi sử dụng dấu nháy kép</h3>";
    $xe="Xe may";
    echo "Dau nhay kep , loai xe la : $xemay";
    echo 'Dau nhay don , loai xe la : $xemay';
?>