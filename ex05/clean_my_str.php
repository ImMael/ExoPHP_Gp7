<?php

function remove_spaces($argv){
    $arg = preg_split("/[\s,]+/",$argv[1]);
    foreach($arg as $value){
        echo $value = $value . " ";
    }
}
remove_spaces($argv);

?>