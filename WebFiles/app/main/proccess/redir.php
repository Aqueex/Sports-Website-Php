<?php 
ob_start();
define('__PATH__', $_SERVER["DOCUMENT_ROOT"]);
require_once(__PATH__ . "/app/main/functions/functions.php");
$url = get("url");
@header("location: " . $url);
ob_end_flush();
?>