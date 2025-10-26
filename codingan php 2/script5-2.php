<?php
// script5-2.php
// Assignment by reference: variabel menunjuk ke lokasi yang sama

$a = 10;
$b = &$a; // b refer ke a

echo "Awal: a = $a, b = $b<br>";

$b = 40; // mengubah b juga mengubah a
echo "Setelah b = 40: a = $a, b = $b<br>";

// contoh unset pada reference
unset($b); // melepas variabel $b saja (nilai $a tetap)
$a = 55;
echo "Setelah unset(b) dan a = 55: a = $a";
?>
