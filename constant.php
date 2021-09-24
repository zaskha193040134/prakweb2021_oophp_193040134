<?php

// disimpan diluar kelas sebagai konstanta global
// define('NAMA', 'Zaskha Sasmita');
// echo NAMA;

// echo "<br>";

// // bisa masuk ke dalam kelas
// const UMUR = 20;
// echo UMUR;


// ===========   MAGIC CONSTANT ==============
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

// class Coba{
//     // define('NAMA', 'Zaskha Sasmita');
//     const NAMA = 'Zaskha Sasmita';
// }

// echo Coba::NAMA;


echo __LINE__ . "<br>";
///////

echo __FILE__ . "<br>";
///////
function iniCobaCoba() {
    return __FUNCTION__;
}
///////

echo iniCobaCoba() . "<br>";
//////

class Cobaaa {
    public $kelas = __CLASS__;
}
$obj = new Cobaaa();
echo $obj->kelas . "<br>";
//////

trait iniTrait{
    function printTrait(){
        echo __TRAIT__;
    }
}
class Sedan{
    use iniTrait;
}
$kendaraan = new Sedan();
$kendaraan->printTrait(); 

?>