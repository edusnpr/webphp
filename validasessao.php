<?php
$erro="";
var_dump($_POST);
if(empty($_POST)){
    $erro ="<br>Invalido, entrar com os campos!!!</br>";
}
else{
    $usuario = $_POST["txtusu"];
    $senha = $_POST["txtsenha"];
    if(!($usuario == "Silvio" and $senha == "123")){
        $erro="<br>ERRO: Senha invalida - Negado!!!<br>";
    }
}
if($erro ==""){
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha']= $senha;
    //var_dump($_SESSION);
    header('Location: menuprincipal.php');
}
else{
    $chamada = "Location: lohin2.php?mensagemErro=".$erro;
    header($chamada);
}
