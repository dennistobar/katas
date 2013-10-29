<?php

include 'funcion.php';

class StackTest extends PHPUnit_Framework_TestCase
{

    public function data(){
        return array(
            array(1, ['pares' => 1, 'impares' => 1]),
            array(2, ['pares' => 2, 'impares' => 1]),
            array(3, ['pares' => 2, 'impares' => 2]),
            array(10, ['pares' => 6, 'impares' => 5]),
            array(15, ['pares' => 8, 'impares' => 8]),
            array(20, ['pares' => 11, 'impares' => 10]),
            array(100, ['pares' => 51, 'impares' => 50])
        );
    }

    /**
    * @dataProvider data
    **/
    public function testGetParesIterativo($a, $b){
        $this->assertEquals($b, iterativo($a));
    }

    /**
    * @dataProvider data
    **/
    public function testGetSimples($a, $b){
        $this->assertEquals($b, simple($a));
    }

}
