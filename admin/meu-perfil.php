<?php 
require "../inc/cabecalho-admin.php"; 

?>
  <div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
      <h2 class="text-center">Atualizar meu perfil</h2>

      <form action="" method="post" id="form-atualizar" name="form-atualizar" class="mx-auto w-75">
        <input class="form-control" type="hidden" name="id">

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input class="form-control" required type="text" id="nome" name="nome" placeholder="Nome (obrigatório)">
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input class="form-control" required type="email" id="email" name="email" placeholder="E-mail (obrigatório)">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input class="form-control" type="password" id="senha" name="senha"  placeholder="Preencha apenas se for alterar">
        </div>

        <!-- Select de tipos/níveis de usuários -->
        <div class="form-group">
          <label for="tipo">Tipo:</label>
          <select name="tipo" id="tipo" required class="custom-select">
              <option value=""></option>                    
              <option value="editor">Editor</option>     
              <option value="admin">Administrador</option>
          </select>
        </div>

        <button class="btn btn-lg btn-primary" name="atualizar">Atualizar</button>
      </form>
    </article>
  </div>

<?php
require "../inc/rodape-admin.php"; 
?>