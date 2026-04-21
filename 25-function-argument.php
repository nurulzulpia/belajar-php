<?php

function checkstatuskelulusan($grade, $remidial){
    if ($grade > 75 && $remidial < 75){
        echo "anda lulus" .PHP_EOL;
    }else {
        echo "anda tidak lulus" .PHP_EOL;
    }
}

checkstatuskelulusan(70, 72);


// tugas
// buatlah function untuk menghitung luas persegi panjang
// dengan parameter panjang dan lebar
// lalu tampilkan hasilnya


function hitungLuas($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

//contoh pemanggilan
$p = 10;
$l = 5;

$hasil = hitungLuas($p, $l);

echo "panjang: $p" .PHP_EOL;
echo "lebar: $l" .PHP_EOL;
echo "luas persegi panjang: $hasil" .PHP_EOL;
