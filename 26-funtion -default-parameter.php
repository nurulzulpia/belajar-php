<?php

function checkstatuskelulusan($grade=50, $remidial = 0){
    if ($grade > 75 && $remidial < 75){
        echo "anda lulus" .PHP_EOL;
    }else {
        echo "anda tidak lulus" .PHP_EOL;
    }
}

checkstatuskelulusan(70,75 );