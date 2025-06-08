<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="imagens/logo/queilos_logo.png" alt="Logo Fissura Labiopalatina" class="logo-img">
            <span class="logo-text">Fissura Labiopalatina</span>
        </div>
        <div class="footer-info">
            <p class="copyright-disclaimer">&copy; 2025 PNV3100 - Introdução ao Projeto de Engenharia | Conteúdo educativo desenvolvido para fins acadêmicos</p>
        </div>
    </div>
</footer>

<style>
.footer {
    background-color: rgb(189, 189, 235); /* Roxo claro/Lavanda - Fundo suave para o footer. */
    padding: 15px 0;
    box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.08);
    border-top: 1px solid rgba(0, 0, 0, 0.1); /* Ajustado para dar um leve contraste com o fundo. */
    color: #361F0C; /* Marrom Escuro - Para o texto geral do footer, garantindo boa legibilidade. */
    font-size: 13px;
    width: 100%;
    bottom: 0;
    left: 0;
    z-index: 100;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 0 30px;
    gap: 15px;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 8px;
}

.logo-img {
    height: 30px;
    width: auto;
}

.logo-text {
    font-size: 18px; /* Aumentado um pouco a fonte */
    font-weight: bold; /* Adicionado bold */
    color: #004F73; /* Azul Escuro/Petróleo - Para o texto do logo, que é um elemento de destaque. */
}

.footer-info {
    text-align: right;
}

.copyright-disclaimer {
    margin: 0 0 5px 0;
    font-size: 14px; /* Aumentado para 14px */
    font-weight: bold; /* Adicionado bold */
    opacity: 0.9;
    color: #361F0C; /* Marrom Escuro - Mantém a consistência com o texto geral. */
}

.footer-links {
    font-size: 12px;
}

.footer-links a {
    color: #004F73; /* Azul Escuro/Petróleo - Para links, destacando-os no footer. */
    text-decoration: none;
}

.footer-links a:hover {
    color: #FF7F50; /* Laranja/Coral - Para o hover dos links, criando uma interação visual. */
    text-decoration: underline;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
        gap: 10px;
        padding: 10px 15px;
    }
    
    .footer-info {
        text-align: center;
    }
    
    .logo-img {
        height: 25px;
    }
    
    .logo-text {
        font-size: 14px;
    }
    
    .copyright-disclaimer {
        font-size: 13px; /* Ajuste para dispositivos menores, se necessário */
    }
    
    .footer-links {
        font-size: 11px;
    }
}
</style>