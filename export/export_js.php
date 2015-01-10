<?php
/*******************************************
 *
 * 2014 - DDSI (Dise�o y desarrollo de sistemas de informaci�n)
 * Grado en Ingenier�a Inform�tica
 *
 * Ernesto Serrano <erseco@correo.ugr.es>
 * Garo� Exp�sito Luis <garoluis@correo.ugr.es
 * Daniel P�rez G�zquez <Plenidag@correo.ugr.es>
 * Jose Fco Alcalde <jfap0003@correo.ugr.es>
 *
 *
 *******************************************
 *
 * Genera un archivo .js con las preguntas
 *
 ******************************************************************************/
?>
<?php

// Requerimos la comprobaci�n de que la sesi�n est� iniciada, si no redirigir� a la ventana de login
require_once "../session.php";

require_once "../config.php";

// Creamos una nueva instancia de la clase y llamamos al m�todo generar
$export = new Export_Js();
$export->GenerateFile();

?>