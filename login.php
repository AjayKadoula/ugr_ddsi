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
 * Ernesto Serrano <erseco@correo.ugr.es>
 * Garo� Exp�sito Luis <garoluis@correo.ugr.es
 * Daniel P�rez G�zquez <Plenidag@correo.ugr.es>
 * Jose Fco Alcalde <jfap0003@correo.ugr.es>
 *
 *
 *******************************************
 *
 * P�gina principal, desde aqui se llama a todas las dem�s paginas
 *
 ******************************************************************************/
?>
<?php

//Cargamos la configuraci�n
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