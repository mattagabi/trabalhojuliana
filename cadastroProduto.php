<?php

if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento de Produto</title>
</head>
<body>
    CADASTRE O PRODUTO!

    <?php echo $_SESSION[ 'nome']; ?>

<!-- Professora, nesta parte, vou adicionar um formulário para cadastrar os produtos e 
também uma outra página para exibir os produtos cadastrados. 
Pretendo incluir imagens dos produtos e mostrar apenas a quantidade. Caso haja tempo, 
também pretendo adicionar uma opção de checkbox para diminuir a quantidade e outra para aumentar, 
além de uma opção para excluir. -->


    <h4><a href="logout.php">Sair</a></h4>
</body>
</html>