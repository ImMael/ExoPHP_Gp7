<?php

function calc2($string){
$arr = preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);


foreach ($arr as $key => $value) {
    if ($arr[$key] == " ") {
        array_splice($arr, $key, $key);
    }
}
print_r($arr);

if (is_numeric($arr[0]) == false || is_numeric($arr[2])==false ) {
   return "Invalid Syntax 1";
}
switch ($arr[1]) {
    case '*':
        $resultat = $arr[0]*$arr[2];
        break;
    case '-':
        $resultat = $arr[0]-$arr[2];
        break;
    case '+':
        $resultat = $arr[0]+$arr[2];
        break;
    case '/':
        $resultat = $arr[0]/$arr[2];
        break;
    default:
        echo "Invalid Syntax 2";
        break;
}


return $resultat;
};

echo calc2($argv[1]);



function tri($table){
    for($i = 0;$!<count($table);i+= 1){
        if($table[$i] == " " && $table[$i+1] != " "){
            
        }
    }
}
?>