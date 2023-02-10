<?php

/**
 * Make a Database connection
 */

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'students_info';


/**
 * Summary of connect
 * @return mysqli
 */
function connect()
{
	global $host, $user, $pass, $db;
	return $conn = new mysqli($host, $user, $pass, $db);
}