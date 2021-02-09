<?php



$argument = $argv[1];
$string = preg_split('/[\s,]+/',$argument);
$taille = count($string);

$result = "";
for($i = 0;$i < $taille; $i += 1){
    $result = $result.$string[$i]." ";
}
echo $result;

?>