<?php
require "../inc/cabecalho-admin.php"; 


?>
       
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Atualizar Post</h2>

    <form class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar"> 
        
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input class="form-control" type="text" id="titulo" name="titulo" required>
      </div>
      
      <div class="form-group">
        <label for="texto">Texto:</label>
        <textarea class="form-control" name="texto" id="texto" cols="50" rows="10" required></textarea>
      </div>
      
      <div class="form-group">
        <label for="resumo">Resumo (máximo de 300 caracteres):</label>
        <span id="maximo" class="badge badge-success">0</span>
        <textarea class="form-control" name="resumo" id="resumo" cols="50" rows="3" required maxlength="300"></textarea>
      </div>
      
      <div class="form-group">
        <label for="imagem-existente">Imagem do post:</label>
        <!-- campo somente leitura, meramente informativo -->
        <input class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly>
      </div>            
          
      <div class="form-group">
        <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
        <input class="form-control" type="file" id="imagem" name="imagem"
        accept="image/png, image/jpeg, image/gif, image/svg+xml">
      </div>
        
        <button class="btn btn-primary" name="atualizar">Atualizar post</button>
    </form>
      
  </article>
</div>

<?php
require "../inc/rodape-admin.php"; 
?>