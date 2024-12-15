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
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01 - Básico</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                            </li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>Módulo 02</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Módulo 03</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Módulo 04</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Módulo 05</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>

                    <div class="modulo vermelho-escuro">
                        <h3>Módulo 06</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>

                    <div class="modulo azul-escuro">
                        <h3>Módulo 07</h3>
                        <ul>
                            <li><a href="#">Exercício A</a></li>
                            <li><a href="#">Exercício B</a></li>
                            <li><a href="#">Exercício C</a></li>
                        </ul>
                    </div>
                </nav>
        </div>
    </main>
    <footer class="rodape">
        BOBY & ALUNOS <?= date('Y'); ?>
    </footer> 
</body>
</html>