script.js

document.getElementById("btn-criar-jogador").addEventListener("click", function(event) {
  event.preventDefault();
  const apelido = document.getElementById("apelido").value;
  const profissao = document.getElementById("profissao").value;
  
  // Salvar informações do jogador em localStorage
  localStorage.setItem("apelido", apelido);
  localStorage.setItem("profissao", profissao);
  localStorage.setItem("dinheiro", 1000); // Dinheiro inicial
  
  // Redirecionar para página de perfil
  window.location.href = "perfil.html";
});