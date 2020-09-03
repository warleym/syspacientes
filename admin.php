<?php
    session_start();
    require_once('variaveis.php');
    require_once('conexao.php');
    
    
    //$id_usuario = $_GET["id_usuario"];
    
    //recuperando dados da sessao
    $id_usuario = $_SESSION['id_usuario'];
    $nome_usuario = "";

    //validar se codigo do usuario esta na sessao
if(strlen($id_usuario) == 0){
    header("location: index.php");
}
    $sql = "SELECT nome FROM usuarios WHERE id = " . $id_usuario;
    $resp = mysqli_query($conexao_bd, $sql);
    if($rows=mysqli_fetch_row($resp)){
        $nome_usuario = $rows[0];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes - ADM</title>
    <link rel="icon" href="img/favicon/favicon2.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">
</head>
<body>

<div class="container">

<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SysPacientes</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Editar usuário</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
        <li><a href="../navbar-static-top/">Static top</a></li>
        <li><a href="../navbar-fixed-top/">Fixed top</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>

<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
  <h1>Sistema de Pacientes da COVID - 19</h1>
  <p>Bem vindo <?php echo($nome_usuario); ?>.</p>
  <p>
    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Acesso &raquo;</a>
  </p>
<p>
<table border='1'>
<tr>
    <td>Nome do usuário</td>
    <td>...</td>
</tr>
<?php
$sql = "SELECT id,nome FROM usuarios ORDER BY Nome";
$resp = mysqli_query($conexao_bd, $sql);
while($rows=mysqli_fetch_row($resp)){
    $idUsuario = $rows[0];
    $nomeUsuario = $rows[1];
    echo("<tr>");
    echo("<td>$nomeUsuario</td>");
    echo("<td><a class='btn btn-lg btn-success' href='usuario.php?idUsuario=$idUsuario' role='button'>...</a></td>");
    echo("</tr>");
}
?>

</table>
<!-- <a class="btn btn-lg btn-success" href="usuario.php" role="button">Editar usuário</a> -->
</p>

<p>
<a class="btn btn-lg btn-danger" href="logout.php" role="button">Sair</a>
</p>
</div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php
mysqli_close($conexao_bd);
?>

</body>
</html>




