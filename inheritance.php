<?php
//author : Zaskha Sasmita 193040134
class Produk {
  public    $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }

    public function  getInfoProduk() {
        // Komik : Naruto | haji me isayama, Mappa (Rp.1500000) - 100 Halaman. // ini buat patokan
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
       
        return $str;
   
      }
  }



class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Tahun.";
        return $str;
    }
}
 

class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Tahun.";
        return $str;
    }
}


$produk1 = new Komik("Attack on titan", "haji me isayama", "Mappa", 1500000, 100, 0);
$produk2 = new Game("Dota2", "Lord Gaben", "Steam Mobil", 20000, 0,  50);


// Komik : Naruto | haji me isayama, Mappa (Rp.1500000) - 100 Halaman.
// Game : Dota2 | Lord Gaben, Steam Mobil (Rp.20000) ~ 5 Tahun.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();







