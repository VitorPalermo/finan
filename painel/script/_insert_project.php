<?php
include'conexao/conexao.php';

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$date1 = $_POST['date'];
$value = $_POST['value'];
$category = $_POST['categoria'];



$doc = $_FILES['doc'];

if($doc !== null) {

    // verifica se o arquivo que esta sendo eviado esta em um dos formatos listados
    preg_match("/\.(png|jpg|pdf);(1)$/i",$doc["name"], $ext);

    if($text = true){
    // gera um nome aleatorio para a imagem
    $nome_doc = md5(uniqid(time())) . "." . $nome_doc[1];

    $caminho_doc = "expanse/" . $nome_doc;
    // seta o caminho onde o arquivo 

    move_uploaded_file($contract["tmp_name"], $caminho_doc);

    $sql = "INSERT INTO `expanse`(`titulo`,`descricao`,`dateexpanse`,`value`,`categoria`,'doc') 
    VALUES ($titulo,'$desc','$date1','$value','$category','$nome_doc')";
         $inserir = mysqli_query($conexao,$sql);
    }
}



header('Location: form_contact.php?msg=1');

?>
    
