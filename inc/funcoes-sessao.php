<?php
/* Aqui programaremos futuramente
os recursos de login/logout e verificação
de permissão de acesso dos usuários */


/* VERIFICANDO SE NÃO EXISTE UMA SESSÃO EM FUNIONAMENTO */
if(!isset($_SESSION)){
    session_start();
}


function verificaAcesso(){
    /* Se não exite uma variável de sessão */
    if (!isset($_SESSION['id'])) {
        /* então significa que ele não esta logado, portanto 
        apague qualquer usuario a ir para o login.php */
        session_destroy();
        header("location:../login.php");
        die();
    }
} 

function login(int $id, string $nome, string $email, string $tipo){
    /* Criar variaveis de sessão ao logar */
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;    
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $tipo;

}

/* Usado nas páginas administrativas quando clicamos em Sair  */
function logout(){
    session_start();
    session_destroy();
    header("location:../login.php?logout");
    die();

}
