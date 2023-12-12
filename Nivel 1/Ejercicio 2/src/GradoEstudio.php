<?php
class GradoEstudio {
    public function __construct(private int $nota) {}

    public function CalcularGrado_Estudio(): string {
        if ($this->nota >= 60) {
            return "Corresponde a la primera división";
        } elseif ($this->nota >= 45) {
            return "Corresponde a la segunda división";
        } elseif ($this->nota >= 33) {
            return "Corresponde a la tercera división";
        } else {
            return "Tienes que volver a repetir";
        }
    }
}
?>