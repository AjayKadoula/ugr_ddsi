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
 * Requerimos la comprobaci�n de que la sesi�n est� iniciada,
 * si no redirigir� a la ventana de login
 *
 ******************************************************************************/
 ?>
<?php

//Iniciamos la sesi�n php
session_start();

//Comprobamos si tenemos almacenadas las cookies
if (isset($_COOKIE['email'])) {

	//Las asignamos a la sesi�n
	$_SESSION["sess_id_user"] = $_COOKIE['cookie_id_user'];
	$_SESSION["sess_name"] = $_COOKIE['cookie_name'];
	$_SESSION["sess_email"] = $_COOKIE['cookie_email'];
	$_SESSION["sess_role"] = $_COOKIE['cookie_role'];
	$_SESSION["sess_id_language"] = $_COOKIE['cookie_id_language'];
	$_SESSION["sess_code_language"] = $_COOKIE['cookie_code_language'];
	$_SESSION["sess_creation_date"] = $_COOKIE['cookie_creation_date'];

//Si no, comprobamos si est� establecida la variable de sesi�n user
} if (!isset($_SESSION['sess_email'])) {

	//Si no lo est�, solicitamos que el usuario see loguee
	header("Location: login.php");
	exit;

}

?>
