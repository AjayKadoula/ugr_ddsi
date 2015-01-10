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
 * Ernesto Serrano <erseco@correo.ugr.es>
 * Garoé Expósito Luis <garoluis@correo.ugr.es
 * Daniel Pérez Gázquez <Plenidag@correo.ugr.es>
 * Jose Fco Alcalde <jfap0003@correo.ugr.es>
 *
 *
 *******************************************
 *
 * Página principal, desde aqui se llama a todas las demás paginas
 *
 ******************************************************************************/
?>
<?php

//Cargamos la configuración
require_once "config.php";

//Cargamos el controlador
require_once "controller/login.php";

//Cargamos la vista
$page = "login";
$page_title = "Login";

require_once "view/header.phtml";
require_once "view/login.phtml";
require_once "view/footer.phtml";

?>