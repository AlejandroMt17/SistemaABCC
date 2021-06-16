<?php
require("../includes/constants.php");
require("../includes/functions.php");

$eliminar=query("DELETE FROM `catalogo` WHERE `catalogo`.`Id` = ?", $_GET['Id']);
redirect();

?>