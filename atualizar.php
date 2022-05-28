<?php 
include "conexao.php";

$id = $_POST["id"];
$novaid = $_POST["novaid"];
$titulo = $_POST["titulo"];
$preço = $_POST["preço"];
$sql = "UPDATE livros SET id = $novaid, titulo = '$titulo', preço = '$preço' WHERE id = $id";

$atualizar = mysqli_query($conexao, $sql);

?>