<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // lewati mahasiswa ke-5
    }
    if ($i == 9) {
        break; // berhenti saat mahasiswa ke-8
    }
  echo  "mahasiswa dengan nomor : $i" .PHP_EOL;
}
echo "loop selesai";
