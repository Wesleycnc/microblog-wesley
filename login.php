<?php
require "inc/cabecalho.php";
require "inc/funcoes-sessao.php";
require "inc/funcoes-usuarios.php";

/* Mensagens para os processos de erros no login */
if( isset($_GET['acesso_proibido']) ){
  $feedback = "Você deve logar primeiro!";
} elseif( isset($_GET['logout']) ) {
  $feedback = "Você saiu do sistema!";
} elseif( isset($_GET['nao_encontrado']) ) {
  $feedback = "Usuário não encontrado!";
} elseif( isset($_GET['senha_incorreta']) ) {
  $feedback = "A senha está errada!";          
} elseif( isset($_GET['campos_obrigatorios']) ) {
  $feedback = "Você deve preencher todos os campos!";
} else {
  $feedback = "";
}



//1)  [if] Se o botão entar foi acionado 
if (isset($_POST['entrar'])) {

  //2)  [if/else] Se os campos estão vazios
  if (empty($_POST['email']) || empty($_POST['senha'])) {
    // Redireciona para login com parâmetro indicando campos obrigatórios
    header("location:login.php?campos_obrigatorios");
    }else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];
      /* Verificando no banco se existe algum email informado */
      $usuario = buscarUsuario($conexao, $email);

    // 3) [if/else] Se o usuario é diferente de nulo (ou seja, se tem usuario)
    if($usuario != null){
      /* 4) [if/else] Se as senhas forem iguais */
      if (password_verify($senha, $usuario['senha'])) {
        // então inicia o login para a área administrativa
        login(
        $usuario['id'], 
        $usuario['nome'], 
        $usuario['email'], 
        $usuario['tipo']
        );
        header("location:admin/index.php");
        
      }else {
        // Caso contrário, fique no login e diga que a senha tá errada
        header("location:login.php?senha_incorreta");
        
      }

    } else {
      header("location:login.php?nao_encontrado");
      // Caso contrario não existe usuário
    }
    }

  }

?>
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Acesso à área administrativa</h2>

    <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50">

      <p class="my-2 alert alert-warning text-center">
        <?=$feedback?>
      </p>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input class="form-control" type="password" id="senha" name="senha">
      </div>

      <button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

    </form>
  </article>

</div>

<?php
require "inc/rodape.php";
?>