<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuario");
    $stmt->execute();
    $recordSet = $stmt->fetchAll();
    //var_dump($res);
    echo "<h1><a href='menuprincipal.php'>Voltar</a></h1>";
    echo "<h1>Cadastro de Usuarios</h1>";
    echo "<br>Id - Nome - Senha </br>";
    foreach ($recordSet as $k => $v) {
        echo "<br>" . $v['id'] . "--" . $v['nome'] . "--" . $v['senha'];
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
