<?php
include "conexao.php";

$titulo = $_POST["titulo"];
$preço = $_POST["preço"];
$sql = "INSERT INTO livros(titulo, preço) VALUES ('$titulo', $preço)"; 
$inserir = mysqli_query($conexao, $sql);

?>