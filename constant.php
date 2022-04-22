<?php
// Nama     :   Erik Dito Tampubolon
// NIM      :   13321030
// Prodi    :   D3 Teknologi Komputer

define('NAMA', 'Erik Tampubolon');
echo NAMA;

echo "<br>";

const UMUR= 19;
echo UMUR;
echo "<br>";

class Coba {
    const NAMA = 'Erik Tampubolon';
}

echo Coba::NAMA;

function coba() {
    return __FUNCTION__;
}

echo "<br>";
echo coba();

// class Coba {
//     public $kelas = __CLASS__;
// }

$obj = new Coba();
// echo $obj->kelas;
?>