<?php 
//////////////////////////////////////////////////////////////////////////
/*DATABASE AYARLARI*/

$host        = "localhost";
$veritabani  = "spor";
$kullanici   = "root";
$sifre       = "";

try {
     $db = new PDO("mysql:host=$host;dbname=$veritabani;charset=utf8", "$kullanici", "$sifre");
} catch ( PDOException $e ){
     print $e->getMessage();
}
$siteAdi = '';
$siteLinki = 'http://localhost/';
//////////////////////////////////////////////////////////////////////////
?>