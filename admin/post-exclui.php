<?php
require "../inc/funcoes-sessao.php";
require "../inc/funcoes-posts.php";

verificaAcesso();
/* verificaAcessoAdmin(); */

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

excluirPost($conexao, $idPost, $idUsuarioLogado, $tipoUsuarioLogado);

header("location:posts.php");

