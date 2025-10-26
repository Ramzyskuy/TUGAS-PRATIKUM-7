<?php
// script5-1.php
// Assignment by value: saat nilai disalin, perubahan setelahnya TIDAK mempengaruhi variabel yang disalin

$a = 10;
$b = $a; // copy value

echo "Sebelum ubah:<br>";
echo "a = $a, b = $b<br>";

$a = 25; // ubah a
echo "<br>Setelah ubah a menjadi 25:<br>";
echo "a = $a, b = $b<br>";
?>
