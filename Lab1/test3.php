<?php
// Cấu hình mã hóa hiển thị tiếng Việt (nếu cần)
header('Content-Type: text/html; charset=UTF-8');

echo "<h2>Lab 1 - Câu D: Câu 3 (Lab1/test3.php)</h2>";

// ==========================================
// 1. Sử dụng trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi
// ==========================================
echo "<h3>1. Loại bỏ khoảng trắng đầu và cuối chuỗi với trim()</h3>";
$chuoi_khoang_trang = "   Xin chào Lập trình Web 1 - PHP & MySQL!   ";
echo "Chuỗi ban đầu (có dấu nháy để thấy khoảng trắng): '<span style='color:red;'>$chuoi_khoang_trang</span>'<br>";

$chuoi_sau_trim = trim($chuoi_khoang_trang);
echo "Chuỗi sau khi dùng trim(): '<span style='color:green;'>$chuoi_sau_trim</span>'<br>";


// ==========================================
// 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
// ==========================================
echo "<h3>2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)</h3>";
$chuoi_mau = "   Học lập trình PHP rất thú vị!   ";
echo "Chuỗi ban đầu: '<span style='color:red;'>$chuoi_mau</span>'<br>";

$chuoi_ltrim = ltrim($chuoi_mau);
echo "Sau khi dùng ltrim() (bỏ bên trái): '<span style='color:green;'>$chuoi_ltrim</span>'<br>";

$chuoi_rtrim = rtrim($chuoi_mau);
echo "Sau khi dùng rtrim() (bỏ bên phải): '<span style='color:green;'>$chuoi_rtrim</span>'<br>";


// ==========================================
// 3. Cắt chuỗi với substr()
// ==========================================
echo "<h3>3. Cắt chuỗi với substr()</h3>";
// Khai báo chuỗi có > 30 ký tự
$chuoi_dai = "Chào mừng các bạn đến với môn học Lập trình Web 1 PHP và MySQL năm 2026.";
echo "Chuỗi gốc (Độ dài: " . strlen($chuoi_dai) . " ký tự): <br><em>$chuoi_dai</em><br><br>";

// Lấy 10 ký tự đầu tiên
$lay_10_ky_tu = substr($chuoi_dai, 0, 10);
echo "Lấy 10 ký tự đầu tiên: <b>$lay_10_ky_tu</b><br>";

// Lấy từ ký tự thứ 5 đến hết chuỗi (vị trí index 4 là ký tự thứ 5)
$lay_tu_vi_tri_5 = substr($chuoi_dai, 4);
echo "Lấy từ ký tự thứ 5 đến hết chuỗi: <b>$lay_tu_vi_tri_5</b><br>";


// ==========================================
// 4. Thay thế chuỗi với str_replace()
// ==========================================
echo "<h3>4. Thay thế chuỗi với str_replace()</h3>";
echo "Chuỗi ban đầu: <br><em>$chuoi_dai</em><br><br>";

// Thay thế chữ "PHP" thành "PHP & Framework"
$chuoi_thay_the = str_replace("PHP", "PHP & Framework", $chuoi_dai);
echo "Sau khi thay thế 'PHP' thành 'PHP & Framework':<br><b>$chuoi_thay_the</b><br>";
?>