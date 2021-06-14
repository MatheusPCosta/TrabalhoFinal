(function() {
    const texto = document.querySelector("#cep");
    const mensagem = document.querySelector("#mensagem");

    function msg() {
        alert("Em breve receberar um E-mail com a confirmação de um parceiro. ;)");
      }

    mensagem.style.display = "none";

    texto.addEventListener("focusin", function() {
        mensagem.style.display = "block";
    });

    texto.addEventListener("focusout", function () {
        mensagem.style.display = "none";
    });

})();