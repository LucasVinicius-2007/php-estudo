<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
</head>
<body>
    <header></header>
    <main>
        <h1>Introdução ao PHP</h1>

        <h2>O que é PHP?</h2>
        <hr>
        <p>
            PHP é uma linguagem de programação que roda no servidor. Isso significa que o código é processado
            antes de chegar ao navegador: o visitante recebe apenas o HTML pronto, sem ver o código PHP.
        </p>

        <p>Com ele você pode:</p>
        <ul>
            <li>criar páginas dinâmicas, que mudam conforme as informações;</li>
            <li>processar formulários;</li>
            <li>validar dados;</li>
            <li>conectar o site a um banco de dados, como o MySQL.</li>
        </ul>

        <h2>Como utilizar o PHP?</h2>
        <hr>
        <p>
            Para programar em PHP no seu computador, você pode instalar o XAMPP, um pacote que reúne ferramentas
            necessárias para desenvolver e testar aplicações web localmente. Entre elas está o Apache, um servidor
            web que permite acessar seus projetos pelo navegador usando o endereço localhost e executar seus
            códigos PHP no próprio computador.
        </p>

        <h3>Passo a passo de como usar o XAMPP</h3>
        <ol>
            <li>Instale o XAMPP no seu computador. Clique aqui para baixar: <a href="https://www.apachefriends.org/pt_br/download.html">XAMPP</a></li>
            <li>Abra o painel de controle do XAMPP e clique em Start ao lado de Apache.</li>
            <li>Crie uma pasta para o seu projeto dentro da pasta htdocs, que fica no diretório de instalação do XAMPP.</li>
            <li>Coloque os arquivos do projeto nessa pasta (.php, .html, .css).</li>
            <li>Acesse pelo navegador: http://localhost/nome-da-pasta/</li>
        </ol>

        <p>
            <strong>Atenção:</strong> abrir um arquivo .php com duplo clique não executa o código. O PHP precisa ser
            processado por um servidor, como o Apache. Por isso, mantenha o Apache ligado e sempre acesse o projeto
            pelo localhost.
        </p>
    </main>
    <footer></footer>
</body>
</html>