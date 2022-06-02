<?php require "../inc/cabecalho-admin.php"; ?> 
    
        
    <article class="jumbotron bg-white shadow">
      <h2 class="display-4">
      <?=$_SESSION['nome']?>
      </h2>
      <p class="lead">Você está no <b>painel de controle e administração</b> do
      site Microblog e seu <b>nível de acesso</b> é <span class="badge badge-info" ><?=$_SESSION['tipo']?></span>.
      </p>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary" href="meu-perfil.php" >Meu perfil</a>
        <a class="btn btn-primary" href="posts.php">Gerenciar Posts</a>
        <a class="btn btn-primary" href="usuarios.php">Gerenciar Usuários</a>
      </p>
    </article>
        


<?php require "../inc/rodape-admin.php"; ?> 