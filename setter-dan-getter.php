<?php
//author : Zaskha Sasmita 193040134
class Produk {
  private    $judul, 
            $penulis, 
            $penerbit,
            $harga,
            $diskon = 0; 


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga;
    
    }

    public function setJudul($judul){
        // if(!is_string($judul)){
        //     throw new Exception("Judul Harus String");
        // }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    

    public function setHarga($harga){
        $this->harga = $harga;
    }

    // visibility buat di private
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100) ;
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
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0) {

        parent::__construct($judul, $penulis, $penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaaman.";
        return $str;
    }
}
class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }

    // visibility buat di protect
    // public function getHarga(){
    //     return $this->harga;
    // }

    

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk(). " ~ {$this->waktuMain} Tahun.";
        return $str;
    }
}
 



class CetakInfoProduk{
    public function cetak( Produk $produk ) {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Tahun.";
        return $str;
    }
}


$produk1 = new Komik("Attack on titan", "haji me isayama", "Mappa", 1500000, 100);
$produk2 = new Game("Dota2", "Lord Gaben", "Steam Mobil", 20000, 50);


// Komik : Naruto | haji me isayama, Mappa (Rp.1500000) - 100 Halaman.
// Game : Dota2 | Lord Gaben, Steam Mobil (Rp.20000) ~ 5 Tahun.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

//$produk2->harga = 1000;

$produk2->setDiskon(50);

echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Zaskha");
echo $produk1->getPenulis();



