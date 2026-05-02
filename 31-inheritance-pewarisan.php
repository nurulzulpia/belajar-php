<?php

class Hewan{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function bersuara(){
        echo "{$this->name} bisa bersuara";
    }

    public function nyariTikus(){
        echo "ada tikus nich";
    }
}

class Kucing extends Hewan{
    public function bersuara(){
        echo "{$this->name} bisa mengeong".PHP_EOL;
    }

    public function berburu(){
        echo "{$this->name} bisa berburu tikus".PHP_EOL;
    }
}

$kucing = new Kucing("chiko");
$kucing->bersuara();
$kucing->berburu();
$kucing->nyariTikus();
