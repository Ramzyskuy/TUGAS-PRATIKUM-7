<?php
$a = array(1, 2, 3);
$b = $a;

echo "Array a: ";
print_r($a);
echo "<br>Array b: ";
print_r($b);

$a[0] = 99;
echo "<br><br>Setelah a[0] diubah:<br>";
echo "Array a: ";
print_r($a);
echo "<br>Array b: ";
print_r($b);
?>
