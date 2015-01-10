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
 * Esta es la parte del controlador para generar backup de la base de datos
 *
 ******************************************************************************/
?>
<?php

    // Establecemos el nombre que tendr� el archivo de backup en base a la fecha actual
    $filename = "tqm_backup_".date("Ymd").".sql";

    // Establecemos las opciones de mysqldump
    $dumpSettings = array(
        "compress" => "GZIP",
        "no-data" => false,
        "add-drop-database" => false,
        "add-drop-table" => true,
        "single-transaction" => false,
        "lock-tables" => false,
        "add-locks" => false,
        "extended-insert" => true,
        "disable-foreign-keys-check" => false
    );

    // Instanciamos la clase Mysqldum y llamamos al m�todo que comienza un dump de la base de datos
    $dump = new Mysqldump(DB_NAME, DB_USER, DB_PASSWORD, DB_HOST, "mysql", $dumpSettings);
    $dump->start("backups/{$filename}");

    ?>