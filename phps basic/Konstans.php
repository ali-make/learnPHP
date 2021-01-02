<?php

/**
 * Konstans atau Constants adalah mirip dengan variabel hanya saja ketika konstans di definisikan
 * konstans tidak dapat diubah atau tidak bisa di undefined?
 * konstans bersifat global
 */
define("salam", "Selamat datang di Karawang!"); // case sensitive
echo "<h1>" . salam . "</h1>";
define("SELAMAT", "Welcome to our Campus!", true); // case insensitive 
echo selamat;
define("mobil", [
    "Toyota",
    "BMW",
    "Tesla"
]);
echo "<br>" . mobil[2];
