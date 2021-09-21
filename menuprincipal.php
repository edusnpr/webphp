<?php
session_start();
if (empty($_SESSION)) {
    $erro = "<br>ERRO: Para acessar falzer o Login!</br>";
    $chamada = "Location: login.php?mensagemErro=" . $erro;
    header($chamada);
}
?>
<html>

<head>
    <title>Sistema Teste</title>
</head>

<body>
    <h1>Menu Principal</h1>
    <h2>Usuário
        <?php
        //var_dump($_SESSION);
        echo "<br><br>Nome = " . $_SESSION['usuario'];
        ?>
    </h2>
    <hr />
    <br />
    <a href="cadastrousuarios.php">Cadastrar Usuarios</a>
    <br />

</body>

</html>