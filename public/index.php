<?php

require("../includes/constants.php");
require("../includes/functions.php");


if(isset($_GET['q'])){
	$catalogo = query("SELECT * FROM catalogo WHERE Piezas  LIKE ?", '%'.$_GET['q'].'%');
}else{
	$catalogo = query("SELECT * FROM catalogo");
}
require("../templates/Header.php");
require("../templates/index.php");
?>