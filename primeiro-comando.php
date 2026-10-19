<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro comando em PHP | Estudo PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <p class="logo">Estudo PHP</p>

        <nav aria-label="Navegação principal">
            <a href="index.php">Introdução</a>
            <a href="primeiro-comando.php" class="ativo" aria-current="page">Primeiro comando</a>
        </nav>
    </header>

    <main>
        <h1>Meu primeiro comando em PHP</h1>

        <section class="cartao">
            <h2>Código PHP</h2>

<pre><code>&lt;?php
    echo "Olá, mundo!";
?&gt;</code></pre>
        </section>

        <section class="cartao">
            <h2>Resultado</h2>

            <p class="resultado">
                <?php echo "Olá, mundo!"; ?>
            </p>
        </section>

        <a class="proximo" href="index.php">&larr; Voltar para a introdução</a>
    </main>

    <footer>
    <p>Estudos de PHP - <?= date('Y') ?></p>
    <p>
        Autor - GitHub:
        <a href="https://github.com/LucasVinicius-2007" target="_blank" rel="noopener">LucasVinicius-2007</a>
    </p>
    <p class="aviso-rodape">&copy; Este projeto é para fins de aprendizado &copy;</p>
</footer>

</body>
</html>