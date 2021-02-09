<?php

function my_strlen($string){
    $value = 0;
    $str = str_split($string);
    foreach($str as $val){
        $value += 1;
    }
    return $value;
}
print_r(my_strlen("Hello\nWorld!\n\0Coucou!"));

?>