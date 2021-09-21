<html>

<head>
    <title>Calculo</title>
</head>

<body>
    <h1>Login de Acesso</h1>
    <form action="validaSessao.php" method="post">
        <p>Usuario:
            <input type="text" name="txtusu">
        </p>
        <p>Senha:
            <input type="password" name="txtsenha">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
    <?php
    var_dump($_GET);
    if (empty($_GET)) {
        echo "<br>GET sem dados</br>";
    } else {
        $msgErro = $_GET["mensagemErro"];
        echo "<br>" . $msgErro . "<br>";
    }
    ?>

</body>

</html>