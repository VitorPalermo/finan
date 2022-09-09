<?php

include 'conexao/conexao.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$business = $_post ['business'];

$sql = "INSERT INTO agenda (name,mail,telephone,business)values ('$name','$mail','$phone','$phone','$business')";

$insert = mysqli_query($conexao,$sql);

header('location: form_contact.php?msg=1');