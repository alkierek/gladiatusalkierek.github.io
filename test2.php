<?php
// Configuracion rutas
$ruta_fichero_php_original = "test1.php";
$ruta_plantilla_php = "test1.php";

// Leemos plantilla
$contenido_plantilla = file_get_contents($ruta_plantilla_php);

//
$acto = 'asd';

// Parseamos plantilla
$plantilla_parseada1 = str_replace('$acto2', '$acto1', $contenido_plantilla);
$plantilla_parseada2 = str_replace('$acto1,', '$acto', $contenido_plantilla);

// Guardamos los cambios en el fichero original
$gestor = fopen($ruta_fichero_php_original, "w");
if(fwrite($gestor, $plantilla_parseada))
    echo "Escritura correcta";
else
    echo "No se pudo escribir en el fichero";
?>