<?php
include 'GradoEstudio.php';
use PHPUnit\Framework\TestCase;

class GradoEstudioTest extends TestCase {
    private $nota;

    public function setUp(): void {
        $this->nota = new GradoEstudio(0);
    }

    public function testVerificarGradoEstudio() {
        $this->assertEquals("Corresponde a la primera división", $this->nota->CalcularGrado_Estudio());
        $this->assertEquals("Corresponde a la segunda división", $this->nota->CalcularGrado_Estudio());
        $this->assertEquals("Corresponde a la tercera división", $this->nota->CalcularGrado_Estudio());
        $this->assertEquals("Tienes que volver a repetir", $this->nota->CalcularGrado_Estudio());
    }
}
?>