<?php

$names = ["pia", "bujeck", "adel", "intan"];

$status = array("jomblo", "taken", "menikah");  

$names[1] = "bujack";

// menambahkan sebuah data ke array yang lama
$names[] = "ipul";


// hallo nama saya pia, status saya sekarang jomblo

echo "hallo nama saya $names[0], status saya sekarang $status[0]\njumlah data ada " . count($names) . "orang";

// jumlah data status adalah 3
echo "jumlah data status adalah : " . count($status);
