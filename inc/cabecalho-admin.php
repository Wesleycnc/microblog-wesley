<?php
// Guardando o nome da página atual
$pagina = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Admin | Microblog</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="admin">

  <header id="topo" class="mb-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
      <div class="container">
        <h1><a class="navbar-brand" href="index.php">Admin | Microblog</a></h1>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="meu-perfil.php">Meu perfil</a></li>
            <li class="nav-item"><a class="nav-link" href="posts.php">Posts</a></li>
            <li class="nav-item"><a class="nav-link" href="usuarios.php">Usuários</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php" target="_blank">Área pública</a></li>
            <li class="nav-item"><a class="nav-link" href="">&times; Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main class="container">