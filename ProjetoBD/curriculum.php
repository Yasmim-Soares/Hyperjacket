<?php require 'conexao.php'; ?>
<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$cargo = $_GET['cargo'];
$apresentacao = $_GET['apresentacao'];

function insere($conexao, $nome, $email, $telefone, $cargo, $apresentacao) {
    try {
        $sql = "insert into  curriculum (nome, email, telefone, cargo, apresentacao) VALUES ('$nome', '$email', '$telefone', '$cargo', '$apresentacao')";
        $stmt = $conexao->prepare($sql);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro" . $e->getMessage();
    }
}

if (insere($conexao, $nome, $email, $telefone, $cargo, $apresentacao)) {
    echo "CADASTRO FEITO COM SUCESSO";
} else {
    echo "ERRO";
}

?>