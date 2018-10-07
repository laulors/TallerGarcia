<?php
function dbconnection($arrayInfo)
{
	try {
		$connection = new PDO('mysql:host='.$arrayInfo['host'].';dbname='.$arrayInfo['dbname'],$arrayInfo['user'],$arrayInfo['password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		return $connection;
	} catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}
}
?>
