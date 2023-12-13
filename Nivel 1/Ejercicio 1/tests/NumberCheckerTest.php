<?php
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
    private $num;

    public function setUp():void{ //indicamos con que numero queremos testear
        $this->num = new NumberChecker(8);
        $this->num = new NumberChecker(-5);
    }

    public function testEsNumPar(){ //metodo para testear si es par
        $this -> assertEquals(true, $this->num->isEven());
    }

    public function testEsNumPositivo(){ //metodo para testear si es positivo
        $this -> assertEquals(true, $this->num->isPositive());
    }


}


?>