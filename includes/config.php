<?php
require_once('adodb/adodb.inc.php');
$db = NewADOConnection('mysqlt');
//podajemy namiary na baz� danych: adres, user, haslo, nazwa
$db -> Connect("orodlin.qu", "mysql", "mysql", "orodlin");
$db -> Execute("SET NAMES utf8");
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$ADODB_CACHE_DIR = 'cache';
$gamename= "����";
$gamemail = "noreply@orodlin.qu";
//tutaj musimy konicznie poda� adres pod kt�rym dost�pna b�dzie gra
//bez pocz�tkowego http:// i ko�cowego /
//zazwyczaj b�dzie to "localhost" lub "localhost/orodlin"
$gameadress = "http://orodlin.qu";
$adminname = "wmza";
$adminmail = "admin@xxx.pl";
$city1 = "Baburka";
$city1a = "Baburke";
$city1b = "Baburka";
$city2 = "Kiev";
$pllimit = 50;
?>