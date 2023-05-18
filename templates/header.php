<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--ESTILOS DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <title>Projeto Blog</title>
    <!--GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asap:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@300;700&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a id="logo" href="<?= $BASE_URL ?>"><img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar"></a>
        <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?= $BASE_URL ?>">Home</a></li>
                <li><a class="nav-link" href="#">Categorias</a></li>
                <li><a class="nav-link" href="#">Sobre</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL ?>contato.php">Contato</a></li>
            </ul>
        </nav>
</header>