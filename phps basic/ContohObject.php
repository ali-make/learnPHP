<?php

/**
 * Contoh Object Class
 */
class Mobil
{
    public $model;
    public $warna;
    public function __construct($model, $warna)
    {
        $this->model = $model;
        $this->warna = $warna;
    }
    public function pesan()
    {
        return "Mobil ku adalah " . $this->model . " " . $this->warna  . "!";
    }
}

$mobilKu = new Mobil("Tesla", "Hitam");
echo $mobilKu->pesan();
echo "<br>";
$mobilKu = new Mobil("Honda", "Merah");
echo "<h1>" . $mobilKu->pesan() . "</h1>";
