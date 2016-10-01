<?php
$server = 'catbendixen.dk.mysql';
$username = 'catbendixen_dk';
$password = 'Zsgvafbp';
$database = 'catbendixen_dk';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}