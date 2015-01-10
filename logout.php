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
 * Cierra una sesión abierta, y limpia sesión y cookies
 *
 ******************************************************************************/
 ?>
<?php

session_start();
// Borramos toda la sesion
session_destroy();

// Establecemos la duración en ayer

$duration = time() -3600;
// Borramos las cookies
setcookie("cookie_id_user", "", $duration);
setcookie("cookie_name", "", $duration);
setcookie("cookie_email", "", $duration);
setcookie("cookie_role", "", $duration);
setcookie("cookie_id_language", "", $duration);
setcookie('cookie_code_language', $user["code_language"], $duration);
setcookie('cookie_creation_date', $user["date"], $duration);

//Redirigimos a la página principal (atención, no funcionará si pintamos algo previamente)
header("Location: index.php");

?>
