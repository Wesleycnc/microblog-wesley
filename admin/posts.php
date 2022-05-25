<?php 
require "../inc/cabecalho-admin.php"; 

?>      
    
<div class="row">
  <article class="col-12 bg-white rounded shadow my-1 py-4">
    <h2 class="text-center">Posts <span class="badge badge-primary">X</span></h2>
    <p class="lead text-right">
      <a class="btn btn-primary" href="post-insere.php">Inserir novo post</a>
    </p>
            
    <div class="table-responsive"> 

      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th>Título</th>
            <th>Data</th>
            <th>Autor</th>
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>

          <tr>
            <td> Título do post... </td>
            <td> 21/12/2112 21:12 </td>
            <td> Autor do post... </td>
            <td class="text-center">
              <a class="btn btn-warning btn-sm" 
              href="post-atualiza.php">
                  Atualizar
              </a>
            </td>
            <td class="text-center">
              <a class="btn btn-danger btn-sm excluir"
              href="post-exclui.php">
                  Excluir
              </a>
            </td>
          </tr>

        </tbody>                
      </table>
      
    </div>
  </article>
</div>
     

<?php require "../inc/rodape-admin.php"; ?> 