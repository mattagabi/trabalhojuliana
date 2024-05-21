<?php
include('conexao.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if($sql_query->num_rows > 0) {
        echo "Este email já está registrado!";
    } else {
        $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$hashed_password')";
        if($mysqli->query($sql_code) === TRUE) {
            echo "Conta Registrada!";
            header("Location: index.php");
        } else {
            echo "Erro ao registrar: " . $mysqli->error;
        }
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
