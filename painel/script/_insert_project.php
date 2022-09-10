<?php
include'conexao/conexao.php';

$code = $_POST['code'];
$client = $_POST['client'];
$service = $_POST['service'];
$desc = $_POST['desc'];
$date = date('y-m-d');
$date2 = $_POST['date'];
$paytotal = $_POST['value'];
$npayments = $_POST['part'];
$obs = $_POST['obs'];
$tasks = $_POST['tasks'];

$total = count($tasks);

for($i=0; $i < $total; $i=+) {
    $sql = "INSERT INTO tasks(code,task,status*) values
    ($code,'$tasks[$i],'pendente')";
    $query = mysqli_query($conexao,$sql);
}

$contract = $_FILES['contract'];

if($contract !== null) {

    // verifica se o arquivo que esta sendo eviado esta em um dos formatos listados
    preg_match("/\.(png|jpg|pdf);(1)$/i",$contract["name"], $ext);

    if($text = true){
    // gera um nome aleatorio para a imagem
    $nome_contract = md5(uniqid(time())) . "." . $ext[1];

    $nome_contract = "image/" . $nome_contract;
    // seta o caminho onde o arquivo 

    move_uploaded_file($contract["tmp_name"], $caminho_contract);

    $sql = "INSERT INTO `project`(`code`,`client`,`service`,`description`,`datestar`,`dateend`,`paytotal`,
         `obs`,contract) VALUES ($code,'$client','$service','$desc','$date','$date2','$paytotal','$npayments',
         '$obs','$nome_contract')";
         $insert = mysqli_query($conexao,$sql);
    }
}



header('Location: form_contact.php?msg=1');

?>
    
