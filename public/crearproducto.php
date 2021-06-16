<?php
require("../includes/constants.php");
require("../includes/functions.php");

$piezas=$_POST["Piezas"];
$precio=$_POST["Precio"];
$descripcion=$_POST["Descripcion"];
$stock=$_POST["Stock"];
$imagen=$_POST["Imagen"];
$inserccion=query("INSERT INTO `catalogo` (`Id`, `Piezas`, `Precio`, `Descripción`, `Stock`, `Imagen`) VALUES (NULL, ?, ?, ?, ?, ?)",$piezas,$precio,$descripcion,$stock,$imagen);
var_dump($inserccion);
redirect();
?>