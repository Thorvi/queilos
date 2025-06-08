<header>
    <div class="header-content">
        <div class="navbar-container">
            <div class="navbar">
                <div class="nav-item">
                        <a href="index.php" class="image-button">
                            <img src="imagens/header/sobre_a_condicao.png">
                            <span class="button-text">Inicio </span>
                        </a>
                    </div>
                <div class="nav-item">
                    <a href="centros_de_atendimento.php" class="image-button">
                        <img src="imagens/header/mapa.png">
                        <span class="button-text">Centros</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="depoimentos.php" class="image-button">
                        <img src="imagens/header/depoimentos.png">
                        <span class="button-text">Depoimentos</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="perguntas_frequentes.php" class="image-button">
                        <img src="imagens/header/faq.png">
                        <span class="button-text">Perguntas</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="grupo.php" class="image-button">
                        <img src="imagens/header/grupo.png">
                        <span class="button-text">Grupo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    header {
        text-align: center;
        padding-top: 20px;   /* Mantém o padding superior em 20px (ou o valor desejado) */
        padding-bottom: 0px; /* Reduz o padding inferior para 5px (ajuste como preferir) */
        width: 100%;
        top: 0;
        left: 0;
        margin-top: 0;
        z-index: 1000;
        background-color:rgb(189, 189, 235);
    }

    .header-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .site-title {
        text-decoration: none;
        color: inherit;
        margin-bottom: 15px;
    }

    .site-title h1 {
        margin: 0;
        font-size: 50px;
    }

    .navbar-container {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .navbar {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 80px;
        max-width: 95%;
        align-items: flex-start;
    }

    .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 150px;
        min-height: 200px;
    }

    .image-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        transition: transform 0.3s ease;
        width: 100%;
        height: 100%;
        justify-content: flex-start;
    }

    .image-button img {
        width: 160px;
        height: 130px;
        object-fit: cover;
        margin-bottom: 10px;
        border-radius: 15px;
    }

    .button-text {
        color: #333;
        font-size: 23px;
        text-align: center;
        transition: inherit;
        width: auto;
        margin: 0 auto;
        display: block;
        margin-top: auto;
        padding-top: 5px;
        white-space: nowrap;
    }

    .image-button:hover {
        transform: translateY(-5px);
    }

    .image-button:hover .button-text {
        color: #000;
        font-weight: bold;
    }
</style>