<?php
require_once('variaveis.php');
require_once('conexao.php');

$email = $_POST["inputEmail"];
$senha = $_POST["inputPassword"];
$validou = true;
$erro = "";
// validar senha
if(strlen($senha) < 6){
    $erro = "Senha menor que 6 caracteres";
    $validou = false;
}else if(strlen($senha) > 6){
    $erro = "Senha maior que 6 caracteres";
    $validou = false;
}

//exibir ou retornar
if($validou){
echo "<hr>";
echo "E-mail: " . $email."<br>";
echo "Senha: ".$senha;
}else{
    header("location:index.php?erro=$erro");
}

?>