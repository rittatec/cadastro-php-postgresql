<!-- arquivo de configuração para conexão com o banco de dados PostgreSQL -->

<?php
$host = "localhost";
$port = "5432";
$dbname = "teste";
$user = "postgres";
$password = "1234"; // altere conforme seu PostgreSQL

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("❌ Erro na conexão com PostgreSQL.");
}
?>
