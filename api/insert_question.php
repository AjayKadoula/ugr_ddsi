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
 * 	Est� p�gina ser� llamada desde la aplicacion m�vil para insertar preguntas
 *
 ******************************************************************************/
?>

<?php

// Establecemos el nombre de la entidad para poder instanciar su clase
$_GET["table"] = "questions";

// Establecemos el id del usuario a 0, ya que las sugeridas son de usuarios externos
$_POST["id_user"] = 0;

// Llamamos al fichero de insert, que se encargar� del resto
require_once "../controller/insert.php";

?>