<?php
include'./conexao/conexao.php';
// include './script/password.php';

$mail = $_POST['mail'];
$password = $_POST['password'];
$nivel = 3;

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($search);  
// conta quantas linhas temos no resultado

if($total > 0){ 
    header('Location: ../index.php?msg=3');
    // mensagem de retorno

}else{

    $sql = "INSERT INTO usuario (mail,password,id_user_nivel) values('$mail', sha1('$password'),$nivel)";
    $insert = mysqli_query($conexao, $sql);

    // header('location: form_users.php?msg=1');
    header('location: ../index.php?msg=1');
}
?>

