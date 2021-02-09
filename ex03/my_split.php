<?php

function my_split($charstring){
    $keychain = preg_split("/[\s,]+/",$charstring);
    sort($keychain);
    return $keychain;
}
print_r(my_split('Hey       Courage AAAA'));

?>