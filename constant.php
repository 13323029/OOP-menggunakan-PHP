<?php

// define('NAMA', 'Arizona Damanik');

// echo NAMA;
// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// class Coba {
//     const NAMA = 'Arizona';
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>