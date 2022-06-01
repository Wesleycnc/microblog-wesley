<?php
require "inc/cabecalho.php";
require "inc/funcoes-sessao.php";
require "inc/funcoes-usuarios.php";

if (isset($_POST['entrar'])) {
  if (empty($_POST['email']) || empty($_POST['senha'])) {
    header("location:login.php?campos_obrigatorios");
    }else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $senha = $_POST['senha'];
      /* Verificando no banco se existe algum email informado */
      $usuario = buscarUsuario($conexao, $email);


    if($usuario != null){
      if (password_verify($senha, $usuario['senha'])) {
        login(
        $usuario['id'], 
        $usuario['nome'], 
        $usuario['email'], 
        $usuario['tipo']
        );
        header("location:admin/index.php");
        
      }else {
        header("location:login.php?senha_incorreta");
      }

    } else {
      header("location:login.php?nao_encontrada");
    }
    }

  }

?>
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Acesso à área administrativa</h2>

    <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50">

      <p class="my-2 alert alert-warning text-center">
        Mensagem...
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