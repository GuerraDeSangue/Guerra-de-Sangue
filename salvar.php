<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "NANAZOLA123";
$dbname = "meu_banco_de_dados";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Pegar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

// Verificar se as senhas coincidem
if ($senha != $conf_senha) {
  echo "Senhas não coincidem!";
  exit;
}

// Criptografar senha
$senha = password_hash($senha, PASSWORD_DEFAULT);

// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>