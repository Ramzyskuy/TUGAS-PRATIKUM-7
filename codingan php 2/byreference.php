<?php
$a = 5;
$b = &$a; // b mereferensikan ke a

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br>";

$a = 10;
echo "Nilai a setelah diubah = $a <br>";
echo "Nilai b setelah a diubah = $b <br>";
?>
