<?php

$user = "root";
$password = "";
$dsn = "mysql:host=localhost;dbname=ajax";
$pdo = new PDO($dsn, $user, $password);

$pdo -> exec("set names utf8");

?>
