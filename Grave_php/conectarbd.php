<?php
$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "senac";
$dbname = "db_grave";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn) {
    die("Conexão falhou: ". mysqli_connect_error());
}
?>


