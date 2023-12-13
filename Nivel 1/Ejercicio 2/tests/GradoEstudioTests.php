<?php
use PHPUnit\Framework\TestCase;
class GradoEstudioTest extends TestCase {

    public function testCalcularGrado_Estudio_PrimerDivision() {
        $notaEstudio = new GradoEstudio(0);
        $result = $notaEstudio->CalcularGrado_Estudio(70);
        $this->assertEquals("Corresponde a la primera división", $result);
    }

    public function testCalcularGrado_Estudio_SegundaDivision() {
        $notaEstudio = new GradoEstudio(0);
        $result = $notaEstudio->CalcularGrado_Estudio(50);
        $this->assertEquals("Corresponde a la segunda división", $result);
    }

    public function testCalcularGrado_Estudio_TerceraDivision() {
        $notaEstudio = new GradoEstudio(0);
        $result = $notaEstudio->CalcularGrado_Estudio(40);
        $this->assertEquals("Corresponde a la tercera división", $result);
    }

    public function testCalcularGrado_Estudio_Repetir() {
        $notaEstudio = new GradoEstudio(0);
        $result = $notaEstudio->CalcularGrado_Estudio(40);
        $this->assertEquals("Tienes que volver a repetir", $result);
    }
}



?>