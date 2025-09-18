<?php
$host = "localhost";
$port = "5432";
$dbname = "cadastro";   
$user = "postgres";     
$password = "rita5555"; 

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("❌ Erro na conexão com PostgreSQL.");
}
?>
