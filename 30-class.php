<?php

class person {
    //contoh CONSTANT
    const NEGARA = "indonesia";

    //kumpulan property/variabel
    public string $name;
    public string $address;
    public string $umur;

    // method untuk menyapa orang lain
    //disini terdapat car penggunaan keyword this
    //di sini juga terdapat contoh penggunaan keyword self

    function sayHello(string $name) {
        // halo mbak $name alamat saya di
        echo "halo si cantik $name".PHP_EOL;
        echo "alamat saya di $this->address".PHP_EOL;
        echo "umurku $this->umur".PHP_EOL;
    }

    //cara ke2 mengubah property dan contoh constructor
    public function __construct(string $umur){
        // mengubah nilai property umur
        $this->umur = $umur;
    }
    
    //method dan contoh keyword self
    public function infoNegara(){
        echo "saya berasal dari negara ".self::NEGARA.PHP_EOL;
    }
}

//object/pemanggil
    
$mahasiswa = new person("40");
$mahasiswa->address = "masbagik city";
$mahasiswa->sayHello("pia");
$mahasiswa->infoNegara();

///tugas membuat contoh constant dan keyword self sudah saya gabungin menjadi satu di file class ini!!
