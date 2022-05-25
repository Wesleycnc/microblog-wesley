<?php
require "inc/cabecalho.php";
?>

<div class="row bg-white rounded shadow my-1 py-4">
  <h2 class="col-12 font-weight-light">
    Você procurou por <span class="badge badge-dark">termo digitado</span>
    e obteve <span class="badge badge-info">X resultados</span>
  </h2>

  <!-- INÍCIO Card -->
  <div class="col-12 my-1">
    <article class="card">
      <div class="card-body">
        <h3 class="card-title font-weight-light">Título do post...</h3>
        <p class="card-text">
          <time>
            21/12/2112 21:12
          </time> -
          Resumo do post...
        </p>
        <a href="post-detalhe.php" class="card-link">Continuar lendo</a>
      </div>
    </article>
  </div>
  <!-- FIM Card -->

</div>

<?php
require "inc/rodape.php";
?>