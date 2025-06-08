document.querySelectorAll('.toggle-header').forEach(header => {
    header.addEventListener('click', () => {
        const item = header.parentElement;
        const isActive = item.classList.contains('active');
        
        // Fecha todos os itens primeiro
        document.querySelectorAll('.toggle-item').forEach(otherItem => {
            otherItem.classList.remove('active');
        });
        
        // Abre apenas o item clicado se não estava ativo
        if (!isActive) {
            item.classList.add('active');
        }
    });
});