<?php
require("../includes/constants.php");
require("../includes/functions.php");
$y=query("SELECT * FROM catalogo WHERE Id=?",$_GET['Id'])[0];
require("../templates/header.php");
require("../templates/form_editar.php");
?>