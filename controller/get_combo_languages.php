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
 * 	Obtiene las filas de la tabla, para cargarlas mediante ajax
 *
 ******************************************************************************/
?>
<?php

// Instanciamos un nuevo objeto
$entity = new Languages();
$rows = $entity->getAll();

?>
<select name="id_language" class="form-inline" >
<?php
// Recorremos todas las filas
foreach ($rows as $row):
	$selected = "";
	if ($id_language == $row["id"])
		$selected = " selected";
	echo "<option value=\"{$row["id"]}\" code=\"{$row["code"]}\"{$selected}>{$row["name"]}</option>";
endforeach;
?>
</select>