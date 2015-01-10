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

// Insanciamos un nuevo objeto
$entity = new Categories();
$rows = $entity->getAll();

?>
<select name="id_category" class="form-inline" >
<?php
// Recorremos todas las filas
foreach ($rows as $row): ?>
	<option value="<?php echo $row["id"]; ?>"<?php if ($id_category == $row["id"]) echo " selected"; ?>><?php echo $row["name"]; ?></option>
<?php endforeach; ?>
</select>