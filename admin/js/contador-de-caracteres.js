/* SCRIPT PARA CONTAGEM DE CARACTERES DO CAMPO TEXTAREA RESUMO
-Usado nas páginas post-insere.php e post-atualiza.php */

// Elementos a serem manipulados
const spanMaximo = document.querySelector("#maximo");
const textResumo = document.querySelector("#resumo");

// Obtendo e exibindo a quantidade atual de caracteres do resumo (página post-atualiza.php)
let quantidadeAtual = textResumo.value.length;
spanMaximo.textContent = quantidadeAtual;

// Monitor de evento de digitação de caracteres no campo resumo
textResumo.addEventListener("input", function(){

  // Obtendo e exibindo a quantidade de caracteres digitados
  let quantidadeDigitada = textResumo.value.length;
  spanMaximo.textContent = quantidadeDigitada;

  // Ajustando as classes de acordo com a quantidade digitada
  if(quantidadeDigitada == 300 || quantidadeDigitada == 0){
    spanMaximo.classList.remove("badge-success");
    spanMaximo.classList.add("badge-danger");
  } else {
    spanMaximo.classList.remove("badge-danger");
    spanMaximo.classList.add("badge-success");
  }
});


