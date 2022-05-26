<?php
require "conecta.php";

// Função inserirUsuario: usada em usuario-insere.php
function inserirUsuario(mysqli $conexao, string $nome, string $email, string $senha, string $tipo){
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo)
    VALUES('$nome', '$email', '$senha', '$tipo')";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
// fim inserirUsuario



// Função codificaSenha: usada em usuario-insere.php e usuario-atualiza.php
function codificaSenha(string $senha):string {
    return password_hash($senha, PASSWORD_DEFAULT);
}
// fim codificaSenha



// Função lerUsuarios: usada em usuarios.php
function lerUsuarios(mysqli $conexao){
    $sql = "SELECT id, email, nome, tipo FROM usuarios ORDER BY nome";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $usuarios = [];
    while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}
// fim lerUsuarios



// Função excluirUsuario: usada em usuario-exclui.php

// fim excluirUsuario



// Função lerUmUsuario: usada em usuario-atualiza.php

// fim lerUmUsuario



// Função verificaSenha: usada em usuario-atualiza.php

// fim verificaSenha



// Função atualizarUsuario: usada em usuario-atualiza.php

// fim atualizarUsuario



// Função buscarUsuario: usada em login.php

// fim buscarUsuario





