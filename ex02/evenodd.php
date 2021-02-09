<?php

function evenodd(){
    echo "\nEntrez un nombre: ";
    $reponse = trim(fgets(STDIN));
    
    $nb = intval($reponse);
    if($nb == 0){
        echo $reponse." N'est pas un nombre";
        return evenodd();
    }
    
    
    if($nb%2 == 0){
        echo "Le nombre ".$nb." est Pair";
    }else{
        echo "Le nombre ".$nb." est Impair";
    }
    return evenodd();
}
    evenodd()


?>