
<?php include_once"conexao.php";?>
<?php
/**puxa os dados do input que esta no html */
$nome = $_POST["nome"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$endereço = $_POST["endereço"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$curriculo = $_POST["file"];

/**faz a conexao com o banco de dados */
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_select_db($conn,'$dbname');

/**insere os dados no banco de dados */
$sql = "INSERT INTO user (nome, email, cep, endereço, numero, bairro, cidade, estado, curriculo)
VALUES ('$nome','$email','$cep','$endereço','$numero','$bairro','$cidade','$estado','$curriculo')";
/**faz a verificação */
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Salvei seus dados !'); windown.location = 'index.html';</script>";
    header("Location: ../index.html");
}
else{
    echo "Deu erro :" .$sql . "<br>" . mysqli_error($conn);
    header("Location: ../index.html");

}