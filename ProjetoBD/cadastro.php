<?php require 'conexao.php'; ?>
<?php
$Nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

function insere($conexao, $Nome, $email, $telefone) {
    try {
        $sql = "insert into  cliente (nome, email, telefone) VALUES ('$Nome', '$email', '$telefone')";
        $stmt = $conexao->prepare($sql);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro" . $e->getMessage();
    }
}

if (insere($conexao, $Nome, $email, $telefone)) {
    echo "CADASTRO FEITO COM SUCESSO";
} else {
    echo "ERRO";
}

?>