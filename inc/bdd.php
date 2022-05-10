<?php
// Conexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=womart', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// var_dump($pdo);


// Creation de la session. Permet de stocker des infos sur les internautes
session_start();

// Definition de constantes
// POUR WAMP
//define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'].'/');
//define('URL', '/');

// Pour XAMP ET MAMP
define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'].'/Dev_project_doranco-/');
define('URL', 'http://localhost/Dev_project_doranco-/');

$content = '';
?>