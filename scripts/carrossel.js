document.addEventListener('DOMContentLoaded', function() {
    const depoimentos = document.querySelectorAll('.depoimento');
    const btnAnterior = document.querySelector('.anterior');
    const btnProximo = document.querySelector('.proximo');
    let indexAtual = 0;

    function mostrarDepoimento(index) {
        depoimentos.forEach(depoimento => {
            depoimento.classList.remove('ativo');
        });
        depoimentos[index].classList.add('ativo');
    }

    btnProximo.addEventListener('click', function() {
        indexAtual = (indexAtual + 1) % depoimentos.length;
        mostrarDepoimento(indexAtual);
    });

    btnAnterior.addEventListener('click', function() {
        indexAtual = (indexAtual - 1 + depoimentos.length) % depoimentos.length;
        mostrarDepoimento(indexAtual);
    });

    // Iniciar com o primeiro depoimento visível
    mostrarDepoimento(indexAtual);
});