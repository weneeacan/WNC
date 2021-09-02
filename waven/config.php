<?php

$host = "localhost";
$user = "postgres";
$password = "987654321";
$dbname = "DTIW";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$con) {
   die('Connection failed.');
}
