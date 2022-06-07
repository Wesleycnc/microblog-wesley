<?php 
require "../inc/cabecalho-admin.php"; 
require "../inc/funcoes-posts.php";

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

$posts = lerPosts($conexao, $idUsuarioLogado, $tipoUsuarioLogado);
$quantidade = count($posts);
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

            <?php if($tipoUsuarioLogado == 'admin'){ ?>
            <th>Autor</th>
            <?php } ?>
            
            <th colspan="2" class="text-center">Operações</th>
          </tr>
        </thead>
      
        <tbody>
  <?php foreach($posts as $post) { ?>
          <tr>
            <td> <?=$post['titulo']?> </td>
            <td> <?=$post['data']?></td>

            <?php if($tipoUsuarioLogado == 'admin'){ ?>
            <td> <?=$post['autor']?> </td>
            <?php } ?>

            <td class="text-center">
              <a class="btn btn-warning btn-sm" 
              href="post-atualiza.php?id=<?=$post['id']?>">
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
<?php } ?>
        </tbody>                
      </table>
      
    </div>
  </article>
</div>
     

<?php require "../inc/rodape-admin.php"; ?> 