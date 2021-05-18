<?php
error_reporting(E_ALL);

//Aufbau der Verbindung zur Datenbank
const MYSQL_HOST = 'localhost';
const MYSQL_BENUTZER = 'temp';
const MYSQL_KENNWORT = 'passwort';
const MYSQL_DATENBANK = 'filmdatenbank';
//phpinfo(INFO_MODULES);
$filmdatenbank = new mysqli(MYSQL_HOST,MYSQL_BENUTZER, MYSQL_KENNWORT,MYSQL_DATENBANK);
$result = $filmdatenbank->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
?>