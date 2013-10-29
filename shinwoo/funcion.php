<?php 

function iterativo($n){
    $pares = 0;
    for($i = 0; $i <= $n; $i++){
        $pares += (int)$i % 2 == 0;
    }
    return array('pares' => $pares, 'impares' =>($n+1)-$pares);
}

function simple($n){
    return array('pares' => (int)ceil($n/2)+(int)($n%2==0), 'impares' => (int)ceil($n/2));
}

function imprimir($n){
    print implode("-", array_filter(range(0, abs($n)), function($f){ return $f % 2; }));
}

$n = 30;
echo imprimir($n).PHP_EOL;
echo 'Conté '.simple($n)['pares'].' pares'.PHP_EOL;
echo 'Conté '.simple($n)['impares'].' impares'.PHP_EOL;
