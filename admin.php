<?php
session_start();
    require_once('variaveis.php');
    require_once('conexao.php');
    
    
    $id_usuario = $_GET["id_usuario"];
    $id_usuario_sesseion = $
    $nome_usuario = "";

    $sql = "SELECT nome FROM usuarios WHERE id = " . $id_usuario;
    $resp = mysqli_query($conexao_bd, $sql);
    if($rows=mysqli_fetch_row($resp)){
        $nome_usuario = $rows[0];
    }
    mysqli_close($conexao_bd);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes - ADM</title>
    <link rel="icon" href="img/favicon/favicon2.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>


<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SysPacientes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        <div class="jumbotron">
            <h1 class="display-4">Olá, mundo!</h1>
            <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou informação.</p>
            <hr class="my-4">
            <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
        </div>
    </body>



<body>
    <?php
    echo "<h3>Bem vindo: ". $nome_usuario . "</h3>";
    ?>
    
</body>
</html>




