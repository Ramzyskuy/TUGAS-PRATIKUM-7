<?php
$a = array("x" => 10, "y" => 20);
$b = $a;

$b["y"] = 50;

echo "Array a: ";
print_r($a);
echo "<br>Array b: ";
print_r($b);
?>
