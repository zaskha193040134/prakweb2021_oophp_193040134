<?php
//author : Zaskha Sasmita 193040134
class Produk {
  public    $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe= "tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }

    public function  getInfoLengkap() {
        // Komik : Naruto | haji me isayama, Mappa (Rp.1500000) - 100 Halaman. // ini buat patokan
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
          if($this->tipe == "Komik"){
              $str .= " - {$this->jmlHalaman} Halaman.";
          } else if($this->tipe == "Game") {
              $str .= "~ {$this->waktuMain} Tahun.";
          }

          return $str;
   
      }
  }

 

// class CetakInfoProduk{
//     public function cetak( Produk $produk ) {
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})" ;
//         return $str;
//     }
// }


$produk1 = new Produk("Attack on titan", "haji me isayama", "Mappa", 1500000, 100, 0, "Komik");
$produk2 = new Produk("Dota2", "Lord Gaben", "Steam Mobil", 20000, 0,  50, "Game");



// Komik : Naruto | haji me isayama, Mappa (Rp.1500000) - 100 Halaman.
// Game : Dota2 | Lord Gaben, Steam Mobil (Rp.20000) ~ 5 Tahun.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();







