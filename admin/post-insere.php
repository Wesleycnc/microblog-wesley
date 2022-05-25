<?php 
require "../inc/cabecalho-admin.php"; 

?>
       
  <div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
      <h2 class="text-center">Inserir Post</h2>

      <form  class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

        <div class="form-group">
          <label for="titulo">Título:</label>
          <input class="form-control" required type="text" id="titulo" name="titulo" >
        </div>

        <div class="form-group">
          <label for="texto">Texto:</label>
          <textarea class="form-control" required name="texto" id="texto" cols="50" rows="10"></textarea>
        </div>

        <div class="form-group">
          <label for="resumo">Resumo (máximo de 300 caracteres):</label>
          <span id="maximo" class="badge badge-danger">0</span>
          <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="3" maxlength="300"></textarea> 
        </div>
                
        <div class="form-group">
          <label for="imagem" class="form-label">Selecione uma imagem:</label>
          <input required class="form-control" type="file" id="imagem" name="imagem"
          accept="image/png, image/jpeg, image/gif, image/svg+xml">
        </div>
                
        <button class="btn btn-primary"  id="inserir" name="inserir">Inserir post</button>                
                
      </form>

    </article>
  </div>

<?php require "../inc/rodape-admin.php"; ?> 