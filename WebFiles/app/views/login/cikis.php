<?php

session_start();

ob_start();

session_destroy();
session_start();


require_once(__PATH__ . "/app/main/functions/config.php");
require_once(__PATH__ . "/app/main/functions/functions.php");


if(isset($_SESSION["uidd"])){

	@header("Location: ".$siteLinki."/cikis");}

else {

@header("Location: ".$siteLinki."");

ob_end_flush();

}



?>