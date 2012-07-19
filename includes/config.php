<?php
require_once('adodb/adodb.inc.php');
$db = NewADOConnection('mysqlt');
//podajemy namiary na bazк danych: adres, user, haslo, nazwa
$db -> Connect("orodlin.qu", "mysql", "mysql", "orodlin");
$db -> Execute("SET NAMES utf8");
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$ADODB_CACHE_DIR = 'cache';
$gamename= "Игра";
$gamemail = "noreply@orodlin.qu";
//tutaj musimy konicznie podaж adres pod ktуrym dostкpna bкdzie gra
//bez pocz№tkowego http:// i koсcowego /
//zazwyczaj bкdzie to "localhost" lub "localhost/orodlin"
$gameadress = "http://orodlin.qu";
$adminname = "wmza";
$adminmail = "admin@xxx.pl";
$city1 = "Baburka";
$city1a = "Baburke";
$city1b = "Baburka";
$city2 = "Kiev";
$pllimit = 50;
?>