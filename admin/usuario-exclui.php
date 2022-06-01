<?php
require "../inc/funcoes-usuarios.php";
require "../inc/funcoes-sessao.php";
verificaAcesso();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirUsuario($conexao, $id);
header("location:usuarios.php");
