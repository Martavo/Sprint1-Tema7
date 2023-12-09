<?php
class GradoEstudio{

    public function __construct(private int $nota){}

    function CalcularGrado_Estudio($nota):string{
        if ($nota >= 60) {
            return "Corresponde a la primera división";
        } elseif ($nota >= 45) {
            return "Corresponde a la segunda división";
        } elseif ($nota >= 33) {
            return "Corresponde a la tercera división";
        } else {
            return "Tienes que volver a repetir";
        }
    }
}

?>