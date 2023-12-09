<?php
include 'GradoEstudio.php';

$estudiante1 = new GradoEstudio(0);
echo $estudiante1 ->CalcularGrado_Estudio(79);

$estudiante2 = new GradoEstudio(0);
echo $estudiante2 ->CalcularGrado_Estudio(50);

$estudiante3 = new GradoEstudio(0);
echo $estudiante3 ->CalcularGrado_Estudio(33);

$estudiante4 = new GradoEstudio(0);
echo $estudiante4 ->CalcularGrado_Estudio(14);
?>