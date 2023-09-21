<!-- Classe para poder concetar com o banco de dados -->

<?php

$servidor = "localhost";
$banco = "bdtrambotec";
$usuario = "root";
$senha = "";

try {

    $conexao = new PDO("mysql:host=$servidor;
dbname=$banco",
        $usuario,
        $senha);

    return $conexao;

} catch (PDOException $e) {

    echo '<p>' . $e->getMessage() . '</p>';

}

?>