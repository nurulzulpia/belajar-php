<?php

$number = 2;

do{
    echo "Data mahasiswa ke-$number" .PHP_EOL;
    echo "Data mahasiswa: Mahasiswa_$number" .PHP_EOL;
    echo "Status: Aktif" .PHP_EOL;
    echo "-" .PHP_EOL;

    $number++;

} while ($number <= 5);

echo "Data selesai di tampilkan";
