<?php

class produk
{
  public $nama, 
         $penerbit;

  public function __construct($nama = "judul", $penerbit = "penerbit") {
    $this->nama = $nama;
    $this->penerbit = $penerbit;
  }

  public function getLabel() {
    return "$this->nama, $this->penerbit";
  }
}

$produk1 = new produk("Naruto","Japan");
$produk2 = new produk("Epep", "Garena");

echo "<br>";
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
