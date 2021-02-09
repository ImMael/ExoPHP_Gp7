<?php

echo "Entrez un nombre:";
$handle = fopen("php://stdin",'r');
$line = fgets($handle);
if(trim($line)){
    // echo intval($line);
    if(intval($line) % 2 == 1){
        echo 'Le nombre ' .intval($line) . ' est Impair';
    } else {
        echo 'Le nombre ' . intval($line) . ' est Pair';
    }
    exit;
} elseif(intval($line) == 0) {
    echo intval($line) . " n'est pas un nombre";
}
fclose($handle);
echo "\n";

?>