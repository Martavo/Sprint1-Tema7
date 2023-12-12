<?php
use PHPUnit\Framework\TestCase;

class GradoEstudioTest extends TestCase {
    /**
     * @dataProvider gradoProvider
     */
    public function testGrado($nota, $expectedResult) {
        $GradoEstudio = new GradoEstudio($nota);
        $result = $GradoEstudio->calcularGradoEstudio();
        $this->assertEquals($expectedResult, $result);
    }


    public function gradoProvider() { //Se indica los valores que se revisan y las espectativas de mensajes correspondientes
        return [
            [72, "Corresponde a la primera división"],
            [46, "Corresponde a la segunda división"],
            [36, "Corresponde a la tercera división"],
            [22, "Tienes que volver a repetir"],
        ];
    }
}

?>