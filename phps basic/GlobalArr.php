<?php 
/**
 * Global Array, fungsinya sama seperti global variabel hanya,
 * bedanya mungkin ini array (w belum ngerti sih)
 */
$x = 5;
$y = 10;

function Coba() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; 
}

Coba();
echo $y;
echo " /n ";

function CobaLagi() {
    echo $GLOBALS['y']; // mungkin yang dimaksud dengan variabel dapat diakses langsung
}

CobaLagi();
?>