<?php require 'conexao.php'; ?>
<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$comentario = $_GET['comentario'];

function insere($conexao, $nome, $email, $comentario) {
    try {
        $sql = "insert into  sugestoes (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')";
        $stmt = $conexao->prepare($sql);
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro" . $e->getMessage();
    }
}

if (insere($conexao, $nome, $email, $comentario)) {
    echo "CADASTRO FEITO COM SUCESSO";
} else {
    echo "ERRO";
}

?>