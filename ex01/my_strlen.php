<?php

function my_strlen($string){
    $count = 0;
    $str = str_split($string);

    foreach($str as $f){
        $count += 1;
    }

    echo $count;
};



?>