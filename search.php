<?php
require "inc/funcoes-posts.php";
require "inc/cabecalho.php";

$termo = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
$resultado = busca($conexao, $termo);
?>

<div class="row bg-white rounded shadow my-1 py-4">
  <h2 class="col-12 font-weight-light">
    Você procurou por <span class="badge badge-dark"><?=$termo?></span>
    e obteve <span class="badge badge-info"><?=count($resultado)?> resultados</span>
  </h2>

  <?php foreach ($resultado as $post) { ?>
  <!-- INÍCIO Card -->
  <div class="col-12 my-1">
    <article class="card">
      <div class="card-body">
        <h3 class="card-title font-weight-light"> <?=$post['titulo']?></h3>
        <p class="card-text">
          <time>
            <?=formataData($post['data'])?>
          </time> -
          <?=$post['resumo']?>
        </p>
        <a href="post-detalhe.php" class="card-link">Continuar lendo</a>
      </div>
    </article>
  </div>
  <?php } ?>
  <!-- FIM Card -->

</div>

<?php
require "inc/rodape.php";
?>