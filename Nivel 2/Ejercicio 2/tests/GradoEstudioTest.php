<?php
use PHPUnit\Framework\TestCase;

class GradoEstudioTest extends TestCase
{
    /**
     * @dataProvider gradoProvider
     */
    public function testGrado($nota)
    {
        $estudiante = new GradoEstudio($nota);
        $this->assertEquals("Primera división", $estudiante->calcularGradoEstudio());
        $this->assertEquals("Segunda división", $estudiante->calcularGradoEstudio());
        $this->assertEquals("Tercera división", $estudiante->calcularGradoEstudio());
        $this->assertEquals("Pepetir", $estudiante->calcularGradoEstudio());
    }

    public function gradoProvider()
    {
        return [
            [72],
            [46],
            [36],
            [22],
        ];
    }
}

?>