<?php
include "conexao.php";

$id = $_POST["id"];
$sql = "DELETE FROM livros WHERE ID = $id";

$excluir = mysqli_query($conexao, $sql);

?>