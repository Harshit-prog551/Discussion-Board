<?php

$dsn = "mysql: host=localhost; dbname=discussion; port=4306;";
$username = "root";
$password = "Harshityad5@";

$conn = new PDO($dsn, $username, $password);

if(!$conn){
    die("Connection with DB failed");
}

?>