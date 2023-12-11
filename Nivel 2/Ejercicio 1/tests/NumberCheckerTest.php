<?php
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    /**
     * @dataProvider numbersProvider
     */
    public function testIsEven($num) //DP para saber si es par
    {
        $numberChecker = new NumberChecker($num);
        $this->assertTrue($numberChecker->isEven());
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testIsPositive($num) //DP para saber si es positivo
    {
        $numberChecker = new NumberChecker($num);
        $this->assertTrue($numberChecker->isPositive());
    }

    public function numbersProvider() //se va usando cada valor del array para no repetir metodos
    {
        return [
            [8],
            [6],
            [4],
            [2],
        ];
    }
}
?>