<?php
use PHPUnit\Framework\TestCase;

class GradoEstudioTest extends TestCase {
    private $nota;

    public function setUp(): void { //este metodo prepara los test unitarios instanciando cada ves un objeto con el valor que se indique
        $this->nota = new GradoEstudio(0);
    }

    public function testVerificarGradoEstudio() {
        $this->assertEquals("Corresponde a la primera división", $this->nota->CalcularGrado_Estudio(79));
        $this->assertEquals("Corresponde a la segunda división", $this->nota->CalcularGrado_Estudio(50));
        $this->assertEquals("Corresponde a la tercera división", $this->nota->CalcularGrado_Estudio(33));
        $this->assertEquals("Tienes que volver a repetir", $this->nota->CalcularGrado_Estudio(14));
    }
}


?>