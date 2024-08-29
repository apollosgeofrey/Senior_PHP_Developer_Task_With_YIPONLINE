<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once('./vendor/autoload.php');

	
	/** Database connection settings **/
	$host = 'localhost'; // Change this to your database host
	$db = 'yiponline_php_developer_task'; // Change this to your database name
	$user = 'root'; // Change this to your database username
	$pass = ''; // Change this to your database password

	/** Create a new PDO instance **/
	try {
	    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    die("Database connection failed: " . $e->getMessage());
	}