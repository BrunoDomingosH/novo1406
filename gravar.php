<?php

include("conecta.php");

$id_produto=$_GET["codigo"];
$quantidade=$_GET["quantidade"];


    $comando = $pdo->prepare("INSERT INTO carrinho VALUES($id_produto,$quantidade,'domingos.bh@bol.com.br')" );
    $resultado = $comando->execute();
    header("Location:p.principal.html");


?>