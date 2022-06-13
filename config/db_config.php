<?php
$dbHost     = "192.168.15.162:3306";
$dbUsername = "root";
$dbPassword = "donotcross";
$dbName     = "etec";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// echo "ECHO";

// $host = "192.168.15.162:3306";
// $db_user = "root";
// $db_password = "donotcross";
// $db_name = "etec";

// $db = mysqli_connect($host, $db_user, $db_password, $db_name);

// if($db) {
//     echo "Conexão realizada com sucesso!";
// } else {
//     die('Falha ao conectar ao banco de dados. Mensagem: ' . mysqli_connect_error());
// }