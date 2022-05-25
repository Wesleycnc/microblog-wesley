<?php 
require "../inc/cabecalho-admin.php"; 


?>
<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Usuários <span class="badge badge-primary">X</span>
		</h2>

		<p class="lead text-right">
				<a class="btn btn-primary" href="usuario-insere.php">Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Tipo</th>
						<th colspan="2" class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td> Nome... </td>
						<td> E-mail... </td>
						<td> Tipo... </td>
						<td class="text-center">
							<a class="btn btn-warning btn-sm" 
							href="usuario-atualiza.php">
								Atualizar
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-sm excluir" 
							href="usuario-exclui.php">
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