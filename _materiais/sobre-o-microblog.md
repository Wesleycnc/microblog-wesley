# Sobre o Microblog

## Área Pública (localhost/microblog)
### Qualquer pessoa acessa:

- index.php: página inicial
- post-detalhe.php: visualizar detalhes de um post
- search.php: resultados de uma busca
- login.php: login para entrada na área administrativa


## Área Administrativa (localhost/microblog/admin): 
### Somente pessoas cadastradas como tipo *admin* acessam:

- admin/index.php: página inicial
- admin/meu-perfil.php: visualizar/atualizar próprios dados
- admin/posts.php: visualizar todos os posts de todos os usuários
- admin/post-insere.php: criar posts para o usuário admin logado
- admin/post-atualiza.php: visualizar/modificar posts de qualquer usuário
- admin/post-exclui.php: excluir posts de qualquer usuário
- admin/usuario.php: visualizar todos os usuários
- admin/usuario-insere.php: criar usuários
- admin/usuario-atualiza.php: visualizar/atualizar dados de qualquer usuário
- admin/usuario-exclui.php: excluir qualquer usuário

### Somente pessoas cadastradas como tipo *editor* acessam:

- admin/index.php: página inicial
- admin/meu-perfil.php: visualizar/atualizar próprios dados
- admin/posts.php: visualizar todos os posts do usuário editor logado
- admin/post-insere.php: criar posts para o usuário editor logado  
- admin/post-atualiza.php: visualizar/modificar posts do usuário editor logado
- admin/post-exclui.php: excluir posts do usuário editor logado
- admin/nao-autorizado: página de erro exibida ao tentar acessar um recurso sem permissão



