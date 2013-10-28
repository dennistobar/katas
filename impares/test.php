<?php

include 'funcion.php';

class StackTest extends PHPUnit_Framework_TestCase
{

    public function data(){
        return array(
            array(1, 5, array(2, 6, 10)),
            array(0, 3, array(2, 6)),
            array(-1, 3, array(-2, 2, 6)),
            array(0, 1, array(2)),
        );
    }

    /**
    * @dataProvider data
    **/
    public function testGetImparesArray($a, $b, $c){
        $this->assertEquals($c, getImparesArray($a, $b));
    }

    /**
    * @dataProvider data
    **/
    public function testGetImparesIterativo($a, $b, $c){
        $this->assertEquals($c, getImparesIterativo($a, $b));
    }

}
