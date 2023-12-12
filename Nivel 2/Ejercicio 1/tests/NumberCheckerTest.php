<?php
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    /**
     * @dataProvider numbersProvider
     */
    public function testIsEven($num, $expected) //DP para saber si es par
    {
        $numberChecker = new NumberChecker($num);
        $result = $numberChecker->IsEven();
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testIsPositive($num, $expected) //DP para saber si es positivo
    {
        $numberChecker = new NumberChecker($num);
        $result = $numberChecker->isPositive();
        $this->assertEquals($expected, $result);
    }

    public function numbersProvider() //se va usando cada valor del array para no repetir metodos
    {
        return [
            [8, true],
            [-5, false],
        ];
    }
}
?>