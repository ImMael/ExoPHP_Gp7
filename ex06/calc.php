<?php
function calcul_1($argv){
    if((isset($argv[1]) && isset($argv[2]) && isset($argv[3])) && $argv[4] == null){
    $param2 = preg_split("/[\s,]+/",$argv[2]);
    switch($param2){
        case in_array('+',$param2):
            echo intval($argv[1]) + intval($argv[3]);
            break;
        case in_array('-',$param2):
            echo intval($argv[1]) - intval($argv[3]);
            break;
        case in_array('*',$param2):
            echo intval($argv[1]) * intval($argv[3]);
            break;
        case in_array('/',$param2):
            echo intval($argv[1]) / intval($argv[3]);
            break;
        case in_array('%',$param2):
            echo intval($argv[1]) % intval($argv[3]);
            break;
        }
    } else {
        echo "Incorrect Parameters";
    }
}
calcul_1($argv);

?>