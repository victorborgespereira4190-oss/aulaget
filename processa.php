<?php
// Recebe os parâmetros que vieram da URL
$nome  = $_GET['nome'];
$idade = $_GET['idade'];
$curso = $_GET['curso'];
$email = $_GET['email'];
$escola = $_GET['escola'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>✅ Dados recebidos pela URL:</h2>
        <p>Nome: <span class="dado"><?= htmlspecialchars($nome) ?></span></p>
        <p>Idade: <span class="dado"><?= htmlspecialchars($idade) ?></span></p>
        <p>Curso: <span class="dado"><?= htmlspecialchars($curso) ?></span></p>
        <p>Email: <span class="dado"><?= htmlspecialchars($email) ?></span></p>
        <p>Escola: <span class="dado"><?= htmlspecialchars($escola) ?></span></p>

        <div class="url">
            processa.php?nome=<?= urlencode($nome) ?>&idade=<?= urlencode($idade) ?>&curso=<?= urlencode($curso) ?>&email=<?= urlencode($email) ?>&escola=<?= urlencode($escola)?>
        </div>

        <a href="index.html">← Voltar ao formulário</a>
    </div>
</body>
</html>