<?php
require "inc/funcoes-posts.php";
require "inc/cabecalho.php";

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$post = lerDetalhes($conexao, $idPost);

?>
<div class="row">
	<!-- INÍCIO ROW -->

	<article class="col-12 bg-white rounded shadow my-1 py-4">
		<h2> <?=$post['titulo']?></h2>
		<p class="font-weight-light">
			<time>
			<?=formataData($post['data'])?>
			</time> - <span><?=$post['autor']?></span>
		</p>

		<img src="imagens/<?=$post['imagem']?>" alt="Imagem de destaque do post" class="float-left pr-2 img-fluid">

		<p><?=nl2br($post['texto'])?></p>
	</article>

</div> <!-- FIM ROW -->

<?php
require "inc/rodape.php";
?>