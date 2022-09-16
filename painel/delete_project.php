<?php
include 'conexao/conexao.php';

$code = $_POST['code'];

$sql = "DELETE FROM project where code = $code";
$delete = mysqli_query($conexao,$sql);

header('location: list_projects.php');
?>