<?php
// Cấu hình mã hóa hiển thị tiếng Việt (nếu cần)
header('Content-Type: text/html; charset=UTF-8');

echo "<h2>Lab 1 - Câu C: Câu 2 (Lab1/test2.php)</h2>";

// ==========================================
// 1. Khai báo hai số nguyên và thực hiện các phép toán
// ==========================================
echo "<h3>1. Các phép toán số học cơ bản</h3>";
$a = 15;
$b = 4;
echo "Số a = $a, Số b = $b<br>";
echo "Cộng (a + b) = " . ($a + $b) . "<br>";
echo "Trừ (a - b) = " . ($a - $b) . "<br>";
echo "Nhân (a * b) = " . ($a * $b) . "<br>";
echo "Chia (a / b) = " . ($a / $b) . "<br>";
echo "Chia lấy dư (a % b) = " . ($a % $b) . "<br>";


// ==========================================
// 2. So sánh biến số nguyên và chuỗi số
// ==========================================
echo "<h3>2. So sánh biến kiểu số nguyên và chuỗi số</h3>";
$num = 10;       // int
$str_num = "10"; // string

echo "\$num == \$str_num: "; 
var_dump($num == $str_num); 
echo " (So sánh bằng giá trị, bỏ qua kiểu dữ liệu)<br>";

echo "\$num === \$str_num: "; 
var_dump($num === $str_num); 
echo " (So sánh tuyệt đối: cả giá trị và kiểu dữ liệu phải giống nhau)<br>";

echo "\$num != \$str_num: "; 
var_dump($num != $str_num); 
echo " (So sánh khác giá trị)<br>";

echo "\$num !== \$str_num: "; 
var_dump($num !== $str_num); 
echo " (So sánh khác tuyệt đối: khác giá trị hoặc khác kiểu dữ liệu)<br>";


// ==========================================
// 3. Phép tăng trước (++$x) và tăng sau ($x++)
// ==========================================
echo "<h3>3. Phép tăng trước và tăng sau</h3>";
$x = 5;
echo "Giá trị ban đầu \$x = 5<br>";
echo "Biểu thức ++$x (Tăng trước): " . (++$x) . " (Giá trị \$x sau khi tăng: $x)<br>";

$y = 5;
echo "Giá trị ban đầu \$y = 5<br>";
echo "Biểu thức $y++ (Tăng sau): " . ($y++) . " (Giá trị \$y sau khi hiển thị: $y)<br>";

/*
 * COMMENT (Sự khác nhau):
 * - ++$x (Tăng trước): Tăng giá trị của biến lên 1 đơn vị trước, sau đó mới trả về giá trị mới để thực hiện biểu thức.
 * - $y++ (Tăng sau): Trả về giá trị hiện tại của biến để thực hiện biểu thức trước, sau đó mới tăng giá trị của biến lên 1 đơn vị.
 */


// ==========================================
// 4. Nối chuỗi bằng toán tử . và .=
// ==========================================
echo "<h3>4. Nối chuỗi bằng . và .=</h3>";
$str1 = "Lập trình";
$str2 = " PHP";
$ket_qua = $str1 . $str2; 
echo "Dùng dấu '.': " . $ket_qua . "<br>";

$text = "Học";
$text .= " Web 1"; // Tương đương: $text = $text . " Web 1";
echo "Dùng dấu '.=': " . $text . "<br>";

/*
 * COMMENT (Sự khác nhau):
 * - Toán tử '.': Dùng để nối hai chuỗi lại với nhau và trả về một chuỗi mới, không làm thay đổi giá trị của các chuỗi ban đầu.
 * - Toán tử '.=': Dùng để nối chuỗi ở vế phải vào chuỗi ở vế trái và gán đè trực tiếp kết quả mới vào biến ở vế trái.
 */


// ==========================================
// 5. Đếm số lượng ký tự với strlen() và mb_strlen()
// ==========================================
echo "<h3>5. Đếm số lượng ký tự</h3>";
$chuoi_khong_dau = "Hello PHP";
$chuoi_co_dau = "Xin chào Việt Nam";

echo "Chuỗi không dấu ('$chuoi_khong_dau') dùng strlen(): " . strlen($chuoi_khong_dau) . "<br>";
echo "Chuỗi có dấu ('$chuoi_co_dau') dùng strlen(): " . strlen($chuoi_co_dau) . " (đếm theo số byte)<br>";
echo "Chuỗi có dấu ('$chuoi_co_dau') dùng mb_strlen(): " . mb_strlen($chuoi_co_dau, 'UTF-8') . " (đếm theo số ký tự thực tế)<br>";

/*
 * COMMENT (Sự khác nhau):
 * - strlen(): Đếm tổng số byte của chuỗi. Phù hợp với tiếng Anh (ASCII) vì 1 ký tự = 1 byte. 
 *   Tuy nhiên với chuỗi tiếng Việt có dấu, 1 ký tự chiếm từ 2-3 byte nên strlen() sẽ trả về kết quả lớn hơn số ký tự thực tế.
 * - mb_strlen(): Đếm chính xác số lượng ký tự của chuỗi đa byte (Multi-byte UTF-8), hoạt động chính xác với tiếng Việt.
 */


// ==========================================
// 6. Chuyển đổi chữ hoa và chữ thường
// ==========================================
echo "<h3>6. Chuyển đổi chữ hoa và chữ thường</h3>";
$str_goc = "Lập Trình Web 1 - PHP & MySQL";
echo "Chuỗi gốc: $str_ goc<br>";
echo "strtoupper(): " . strtoupper($str_goc) . "<br>";
echo "strtolower(): " . strtolower($str_goc) . "<br>";
echo "mb_strtoupper(): " . mb_strtoupper($str_goc, 'UTF-8') . "<br>";
echo "mb_strtolower(): " . mb_strtolower($str_goc, 'UTF-8') . "<br>";

/*
 * COMMENT (Sự khác nhau):
 * - strtoupper() / strtolower(): Chỉ chuyển đổi đúng với các ký tự ASCII (tiếng Anh không dấu), không xử lý được các ký tự tiếng Việt có dấu.
 * - mb_strtoupper() / mb_strtolower(): Hỗ trợ mã hóa đa byte, chuyển đổi chính xác chữ hoa và chữ thường cho cả các ký tự tiếng Việt có dấu.
 */


// ==========================================
// 7. Ép kiểu chuỗi sang số nguyên (int)
// ==========================================
echo "<h3>7. Ép kiểu chuỗi sang int với var_dump()</h3>";
$s1 = "123 abc";
$s2 = "abc 123";

$int_s1 = (int)$s1;
$int_s2 = (int)$s2;

echo "Chuỗi '$s1' sau khi ép kiểu: ";
var_dump($int_s1);
echo "<br>";

echo "Chuỗi '$s2' sau khi ép kiểu: ";
var_dump($int_s2);
echo "<br>";


// ==========================================
// 8. Khai báo các biến kiểu dữ liệu và dùng var_dump()
// ==========================================
echo "<h3>8. Hiển thị kiểu dữ liệu bằng var_dump()</h3>";
$i_val = 100;             // int
$f_val = 45.56;           // float
$s_val = "Hello World";   // string
$b_val = true;            // bool

echo "Biến số nguyên (int): "; 
var_dump($i_val); 
echo "<br>";

echo "Biến số thực (float): "; 
var_dump($f_val); 
echo "<br>";

echo "Biến chuỗi (string): "; 
var_dump($s_val); 
echo "<br>";

echo "Biến luận lý (bool): "; 
var_dump($b_val); 
echo "<br>";
?>