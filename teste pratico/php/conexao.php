
<?php
/** faz a conexão com o banco de dados */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "formulario";


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conn){

    die("conexao falhou:". mysqli_connect_error());
}?>