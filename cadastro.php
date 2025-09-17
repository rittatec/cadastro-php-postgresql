<?php
include 'db.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($nome) || empty($email) || empty($senha)) {
    echo "❌ Todos os campos são obrigatórios.";
    exit;
}

// hash da senha para segurança
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// verifica se o email já está cadastrado
$result = pg_query_params($conn, 
"SELECT * FROM usuarios WHERE email = $1", 
[$email]);

if (pg_num_rows($result) > 0) {
    echo "❌ Email já cadastrado.";
    exit;
}

// insere o novo usuário no banco de dados
$insert = pg_query_params($conn, 
"INSERT INTO usuarios (nome, email, senha) VALUES ($1, $2, $3)", 
[$nome, $email, $senhaHash]);

if ($insert) {
    echo "✅ Cadastro realizado com sucesso!";
} else {
    echo "❌ Erro ao cadastrar. Tente novamente.";
}
?>