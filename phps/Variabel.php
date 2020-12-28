<?php

/**
 * ada tiga jenis variabel dalam php, yaitu, local, global, dan static.
 * variabel local hanya bisa diakses dalam function,
 * contoh seperti dibawah 
 */
function hello()
{
    $say = "pagii";

    echo "selamat " . $say . "\n";
}

// error disini
hello();

/**
 * variabel global hanya dapat dieksekusi diluar function saja
 */
$sapa = "siang!";

function sapaSiang()
{
    // error disini
}

echo "selamat $sapa";

?>


