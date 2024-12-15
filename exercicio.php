<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="exercicio.css" rel="stylesheet">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
            <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        BOBY & ALUNOS <?= date('Y'); ?>
    </footer> 
</body>
</html>