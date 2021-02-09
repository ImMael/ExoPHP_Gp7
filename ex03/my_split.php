<?php

function my_split($string){

    $string = preg_split('/[\s,]+/',$string);
    
    sort($string);
    return $string;

}



?>