<?php 

function stringclean($string){
    
    $s = filter_var($string, FILTER_SANITIZE_STRING);
    $limpo = strip_tags($s);


    return $limpo;
}

?>