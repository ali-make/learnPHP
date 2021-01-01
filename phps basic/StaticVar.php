<?php 
/**
 * Static Variabel, maksudnya variabel akan menyimpan nilai 
 * dari proses sebelumnya (ya begituh :D)
 */
function coba() {
    static $x = 0;
    echo $x;
    $x++;
}

coba();
echo " /n ";
coba();
echo " /n ";
coba();
echo " /n ";
coba();

function cobalagi() {
    static $x = 1;
    $y = 2;
    $x += $y;

    echo $x++;
}

echo " /n ";
cobalagi();
echo " /n ";
cobalagi();
echo " /n ";
cobalagi();

function cobacoba() {
    $x = 1;
    $y = 2;

    $x = $x + $y;

    echo $x;
}

echo " /n ";
cobacoba();
?>