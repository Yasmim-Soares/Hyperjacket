<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=3.0">
    <title>HYPERJACKET</title>
</head>
<body>
 <form action="comentario.php" method="GET" class="formulario-info">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="comentario">Comentário (máximo 200 palavras):</label><br>
    <textarea id="comentario" name="comentario" rows="5" placeholder="Digite aqui suas dúvidas, sugestões ou opiniões..."></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

<a href="index.php" class="voltar">Voltar a página inicial</a>
    
</body>
</html>