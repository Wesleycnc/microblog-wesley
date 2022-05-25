/* SCRIPT PARA VALIDAÇÃO DA EXCLUSÃO DE UM REGISTRO
-Usado nas páginas posts.php e usuarios.php */

// Seleciona todos os elementos com a classe .excluir
const linksExcluir = document.querySelectorAll(".excluir");

/* Loop/Laço executando script de acordo 
com a quantidade de links excluir capturados*/
for( let link of linksExcluir ){
    link.addEventListener("click", function(event){
        // Cancela/anula o recarregamento da página
        event.preventDefault();

        // Capturando o endereço do link de excluir clicado
        let enderecoDoLink = link.href;
        
        // Caixa de diálogo para capturar a resposta do usuário
        // (OK/SIM -> true   -  Cancelar/NÃO -> false)
        let resposta = confirm("Tem certeza que deseja excluir?");

        /* Somente se a resposta for true */
        if( resposta ) {
            // Vá para a página de exclusão
            location.href = enderecoDoLink;
        } 
        // Senão, continue onde está (não faça nada)
    });
};