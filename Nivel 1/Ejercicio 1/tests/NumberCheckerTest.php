<?php
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
    private $num;

    public function setUp():void{
        $this->num = new NumberChecker(4);
    }

    public function testEsNumPar(){
        $this -> assertEquals(true, $this->num->isEven());
    }

    public function testEsNumPositivo(){
        $this -> assertEquals(true, $this->num->isPositive());
    }


}


?>