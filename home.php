<?php
session_start();

if ($_SESSION['autenticado'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Home Chikito Pizzaria</title>

</head>

<body>

    <nav class="navbar">
        <div class="logohome">
            <a href="home.html">
                <img src="assets/img/LogoChickito.png" alt="Logochickito" class="logo">
            </a>
        </div>

        <ul class=" btnnav">
            <li><a href="home.php">Home</a></li>
            <li><a href="cardapio.php">Cardápio</a></li>
            <li><a href="promocoes.php">Promoções</a></li>
        </ul>

        <div class="logout">
            <a href="#">
                <img src="assets/img/Seta.png" alt="" width="30" class="seta">
            </a>
            <img src="assets/img/Pessoa_oculta.png" alt="" width="40" class="user">
        </div>
    </nav>
    <div class="entregador">
        <img src="assets/img/entregador.png" alt="imagem de um entregador de pizza" class="img_entregador">
    </div>

    <div class="centro">
        <h1>Faça seu pedido agora mesmo!!</h1>
        <a href="#" class="btn-home">Veja o cardápio</a>

        <a href="#">
            <img src="assets/img/promoção.png" alt="Promoção leve 2 pague 1 até dia 7 fevereiro" class="btn-promo">
        </a>
    </div>



</body>

</html>