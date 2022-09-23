<?php
session_start();

$mailheader = $_SESSION['mailx'];

if(!isset($_SESSION['mailx'])) {
    header('location: ../index.php');

}

include 'conexao/conexao.php';

$sql = "SELECT * from usuario where mail = '$mailheader'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$id = $array['id'];
$name = $array['name'];
$cnpj = $array['cnpj'];
$tel = $array['tel'];
$nivelUser = $array['nivelUser'];

?>