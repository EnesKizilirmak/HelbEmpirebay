<?php
//connexion.php

// Paramètres de connexion à la DB
$host='localhost';
$user='redacteur';
$pass='helb';
$db='sitegarage';

// Définition des variables de connexion
$dsn = "mysql:host={$host};dbname={$db}";

//**************************************
// connexion à mysql et à la db
//**************************************
try 
{
	$dbh = new PDO($dsn, $user, $pass); //db handle
	$dbh->exec('SET NAMES utf8');
	// print_r('connection à la DB ---> OK');
} 
catch (PDOException $e) 
{
	die( "Erreur ! : " . $e->getMessage() );
}
