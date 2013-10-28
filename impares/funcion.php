<?php

function getImparesArray($a, $b){
    return array_map(function($f){
        return $f*2;        
    }, range($a % 2 ? $a : $a+1, $b, 2));
}

function getImparesIterativo($a, $b){
    $tmp = array();
    for($i = $a % 2 ? $a : $a+1 ; $i <= $b; $i+=2){
        $tmp[] = $i * 2;
    }
    return $tmp;

}
