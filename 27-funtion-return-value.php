<?php
//menghitung luas persegi panjang dengan function return value

function luasPersegiPanjang(int $panjang, int $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

$menghitungLuas = luasPersegiPanjang(10, 5);
echo "Luas persegi panjang: " . $menghitungLuas;