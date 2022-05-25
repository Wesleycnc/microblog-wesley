    </main>

    
<footer class="footer bg-dark text-center text-white">
      Microblog é um site fictício desenvolvido para fins didáticos | Senac Penha &copy; 2022</
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<?php if($pagina == 'posts.php' || $pagina == 'usuarios.php'){ ?>
<script src="js/confirm-exclusao.js"></script>
<?php } ?>

<?php if($pagina == 'post-insere.php' || $pagina == 'post-atualiza.php'){ ?>
<script src="js/contador-de-caracteres.js"></script>
<?php } ?>


</body>
</html>