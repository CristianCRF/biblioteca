<h1>funcionario cadastrado com sucesso</h1>
<form>
<a href="login.php"><input type="button" name="voltlogin" value="voltar para login">
</form>

<?php
include "ligaçao.php";

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$sql = "INSERT INTO dadosfuncionarios(NOME, SENHA) VALUES ('$nome', '$senha')";
 
$inserirfuncionario = mysqli_query($ligaçao, $sql);
?>