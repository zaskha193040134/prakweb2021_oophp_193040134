<?php

class Produk {
  public  $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbnit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga; 
    }

    public function getLabel() {
      return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
  }

$produk1 = new Produk("Attack on titan", "haji me isayama", "Mappa", 1500000);
$produk2 = new Produk("Dota2", "Lord Gaben", "Steam Mobil", 0);



echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";  


