<?php
include 'conexao/conexao.php';
include 'script/password.php';

$id = $_POST['id'];

$image2 = $_FILES['image'];
$image2 = file_get_contents($_FILES['image']['tmp_name']);
$nameimage = md5($_FILES['image']);
move_uploaded_file($image['tmp_name'], "images/" . $nameimage . '.jpg');


echo $sql = "UPDATE usuario SET image = '$nameimage' where id = $id";
$insert = mysqli_query($conexao,$sql);

?>