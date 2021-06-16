<?php
require("../includes/functions.php");
require("../includes/constants.php");

$editar=query("SELECT * FROM catalogo WHERE Id=?",$_GET['Id'])

require("../templates/header.php");
require("../templates/formeditar.php");

?>