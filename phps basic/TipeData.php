<?php 
/**
 * cara mencari tahu tipe data suatu variabel
 */
$x = 1;
$y = 2.1;
$t = $x * $y;
var_dump($x);
echo "<hr>";
var_dump($y);
echo "<hr>";
var_dump($t);
echo "<hr>";
var_dump(is_int($t));
?>