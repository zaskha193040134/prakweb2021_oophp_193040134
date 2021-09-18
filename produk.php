<?php

class Produk {
  public  $judul = "judul", 
          $penulis = "penulis", 
          $penerbit = "penerbit", 
          $harga= 0;
    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  }



// $produk1 = new Produk();
// $produk1 -> judul = "Dr.Stone";
// var_dump($produk1);

// $produk2= new Produk();
// $produk2->judul = "Interstellar";
// $produk2->tambahProperti = "wkwkwk"; 
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Attack On Titan";
$produk3->penulis = "Haji me Isayama";
$produk3->penerbit = "Wit/Mappa";
$produk3->harga = 1500000;
// var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = "Dota2";
$produk4->penulis = "Lord Gaben";
$produk4->penerbit = "Steam Mobil";
$produk4->harga = 0;



echo "Komik yaitu $produk3->judul, penulisnya $produk3->penulis, penerbitnya $produk3->penerbit, dan harganya $produk3->harga";
echo "<br>";
echo "Game yaitu $produk4->judul, penulisnya $produk4->penulis, penerbitnya $produk4->penerbit, dan harganya $produk4->harga";



