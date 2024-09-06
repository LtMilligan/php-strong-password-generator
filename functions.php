<?php

function passwordGenerator($length) {
    $keys = array_merge(range(0, 9), range('A', 'z'));
    
    $psswrd = '';
    for($i=0; $i < $length; $i++) {
        $psswrd .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $psswrd;
}

?>