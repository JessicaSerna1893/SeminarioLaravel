<?php

// 1. Variables y Strings
$nombre = "Jessica Serna";
$edad = 33;
$ciudad = "Cartago";
$carrera = "Ingenieria de Sistemas";

// 2. Nuevas variables
$semestre = 9;
$materiaFavorita = "Matematicas";
// 3. Mostrar en HTML
echo "<h1>Mi presentación</h1>";
echo "<p>Hola, soy <strong>$nombre</strong>, tengo $edad años, vivo en $ciudad y estudio $carrera.</p>";

// 4. Mostrar semestre y materia favorita
echo "<p>Estoy en $semestre semestre y mi materia favorita es $materiaFavorita.</p>";

// 5. Diferencia entre comillas simples y dobles
echo '<p>Con comillas simples: $nombre no se interpreta</p>';

?>
