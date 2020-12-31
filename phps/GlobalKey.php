<?php 
/**
 * Global Keyword digunakan untuk mengakses varibel diluar function
 * Contoh seperti dibawah ini!
 */
$x = 3;
$z = 5;

function Coba() {
    global $x, $z;
    $u = 10;
    $h = 3;
    $z = $x * $z;
}

Coba();
echo $z;

echo " ";

function Lagi() {
    global $u, $h; // tapi gak bisa akses kalau dari function lain!
    $u = $h + $u;
}

Lagi();
echo $u;

global $u; // gini juga gak bisa diakses!
echo " ";
echo $u;
?>