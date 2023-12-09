<?php

$host = 'localhost';
$port = '5432';
$username = 'postgres';
$password = 'tes123';
$dbname = 'pweb';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";

$conn = pg_connect($connection_string) or die("Could not connect to db");
?>