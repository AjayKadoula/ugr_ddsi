<?php
/*******************************************
 *
 * 2014 - DDSI (Diseño y desarrollo de sistemas de información)
 * Grado en Ingeniería Informática
 *
 * Ernesto Serrano <erseco@correo.ugr.es>
 * Garoé Expósito Luis <garoluis@correo.ugr.es
 * Daniel Pérez Gázquez <Plenidag@correo.ugr.es>
 * Jose Fco Alcalde <jfap0003@correo.ugr.es>
 *
 *
 *******************************************
 *
 * 	Está página será llamada desde la aplicacion móvil para insertar preguntas
 *
 ******************************************************************************/
?>

<?php

// Establecemos el nombre de la entidad para poder instanciar su clase
$_GET["table"] = "questions";

// Establecemos el id del usuario a 0, ya que las sugeridas son de usuarios externos
$_POST["id_user"] = 0;

// Llamamos al fichero de insert, que se encargará del resto
require_once "../controller/insert.php";

?>