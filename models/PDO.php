<?php
$db_user = "jessica";
$db_passwd = "toupi25juillet!01AVRIL";
$db_host = "localhost";
$db_port = "3306";
$db_name = "tsn";
$db_dataSourceName = "mysql:host=$db_host;port=$db_port;dbname=$db_name";

$PDO = new PDO($db_dataSourceName, $db_user, $db_passwd); // L'objet PDO a besoin de ces trois paramètres
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Permet d'afficher les erreurs, à enlever en prod
