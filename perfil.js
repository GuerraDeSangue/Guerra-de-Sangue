// Carregar informações do jogador de localStorage
const apelido = localStorage.getItem("apelido");
const profissao = localStorage.getItem("profissao");
const dinheiro = localStorage.getItem("dinheiro");

// Atualizar informações do perfil
document.getElementById("apelido-perfil").innerHTML = apelido;
document.getElementById("profissao-perfil").innerHTML = profissao;
document.getElementById("dinheiro-perfil").innerHTML = dinheiro;