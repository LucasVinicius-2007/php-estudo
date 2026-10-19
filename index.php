<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP | Estudo PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <p class="logo">Estudo PHP</p>

        <nav aria-label="Navegação principal">
            <a href="index.php" class="ativo" aria-current="page">Introdução</a>
            <a href="primeiro-comando.php">Primeiro comando</a>
        </nav>
    </header>

    
<main>
    <h1>Introdução ao PHP</h1>

    <section class="cartao">
        <h2>O que é PHP?</h2>

        <p>
            PHP é uma linguagem de programação que roda no servidor. Isso significa que o código é processado
            antes de chegar ao navegador: o visitante recebe apenas o HTML pronto, sem ver o código PHP.
        </p>
    </section>

    <section class="cartao">
        <h2>O que dá para fazer com PHP?</h2>

        <ul>
            <li>criar páginas dinâmicas, que mudam conforme as informações;</li>
            <li>processar formulários;</li>
            <li>validar dados;</li>
            <li>conectar o site a um banco de dados, como o MySQL.</li>
        </ul>
    </section>

    <section class="cartao">
        <h2>Como utilizar o PHP?</h2>

        <p>
            Para programar em PHP no seu computador, você pode instalar o XAMPP, um pacote que reúne ferramentas
            necessárias para desenvolver e testar aplicações web localmente. Entre elas está o Apache, um servidor
            web que permite acessar seus projetos pelo navegador usando o endereço <code>localhost</code> e
            executar seus códigos PHP no próprio computador.
        </p>
    </section>

    <section class="cartao">
        <h2>Passo a passo de como usar o XAMPP</h2>

        <ol>
            <li>
                Instale o XAMPP no seu computador.
                <a href="https://www.apachefriends.org/pt_br/download.html" target="_blank" rel="noopener">Clique aqui para baixar</a>.
            </li>
            <li>Abra o painel de controle do XAMPP e clique em <strong>Start</strong> ao lado de Apache.</li>
            <li>Crie uma pasta para o seu projeto dentro da pasta <code>htdocs</code>, que fica no diretório de instalação do XAMPP.</li>
            <li>Coloque os arquivos do projeto nessa pasta (<code>.php</code>, <code>.html</code>, <code>.css</code>).</li>
            <li>Acesse pelo navegador: <code>http://localhost/nome-da-pasta/</code></li>
        </ol>
    </section>

    <section class="cartao aviso">
        <h2>Atenção</h2>

        <p class="atencao">
            Abrir um arquivo <code style="background-color: #ff000054;">.php</code> com duplo clique não executa o código.
            O PHP precisa ser processado por um servidor, como o Apache. Por isso, mantenha o Apache ligado e
            sempre acesse o projeto pelo <code style="background-color: #ff000054;">localhost</code>.
        </p>
    </section>

    <a class="proximo" href="primeiro-comando.php">Próxima página &rarr;</a>
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