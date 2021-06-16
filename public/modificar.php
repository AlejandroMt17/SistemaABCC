<?php
require("../includes/constants.php");
require("../includes/functions.php");
$Piezas=$_POST["Piezas"];
$Precio=$_POST["Precio"];
$Descripcion=$_POST["Descripcion"];
$Stock=$_POST["Stock"];
$Imagen=$_POST["Imagen"];
$editar=query("UPDATE `catalogo` SET `Piezas` = ?, `Precio` = ?,`Descripción` = ?, `Stock` = ?,`Imagen` = ? WHERE `catalogo`.`Id` = ?;",$Piezas,$Precio,$Descripcion,$Stock,$Imagen,$_GET['Id']);
redirect();
?>