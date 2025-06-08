<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centros de Atendimento</title>
    <link rel="stylesheet" href="css/centros_de_atendimento.css">
    <link rel="stylesheet" href="style.css"> <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="banner-introducao-geral">
            <h2>Centros de Atendimento</h2>
            <p>Encontre os centros de atendimento mais próximos de você no mapa abaixo.</p>
        </div>

        <div id="map-container">
            <div id="map"></div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Inicializa o mapa com coordenadas de São Paulo
        const map = L.map('map').setView([-23.566667, -46.738269], 14);

        // Adiciona a camada base do OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Adicione marcadores (com informações completas de contato)
        const locations = [
            {
                name: "Faculdade de Odontologia da USP",
                coords: [-23.566667, -46.738269],
                address: "Av. Prof. Lineu Prestes, 2227 - Cidade Universitária, São Paulo - SP, 05508-000",
                phone: "(11) 3091-7850",
                email: "atendimento@fo.usp.br",
                hours: "Segunda a Sexta, das 8h às 18h",
                services: "Atendimento odontológico geral e especializado"
            },
            {
                name: "Centro de Saúde Escola Butantã",
                coords: [-23.572, -46.707],
                address: "Av. Corifeu de Azevedo Marques, 3950 - Butantã, São Paulo - SP",
                phone: "(11) 3768-9100",
                email: "atendimento@butanta.sp.gov.br",
                hours: "Segunda a Sexta, das 7h às 19h",
                services: "Atendimento médico geral e odontológico"
            },
            {
                name: "Centro de Especialidades Odontológicas - CEO",
                coords: [-23.550, -46.633],
                address: "R. Capote Valente, 432 - Pinheiros, São Paulo - SP",
                phone: "(11) 3065-8000",
                email: "ceo.pinheiros@prefeitura.sp.gov.br",
                hours: "Segunda a Sexta, das 8h às 17h",
                services: "Atendimento odontológico especializado"
            }
        ];

        // Adiciona marcadores ao mapa com popups detalhados
        locations.forEach(location => {
            const marker = L.marker(location.coords).addTo(map)
                .bindPopup(`
                    <div class="popup-content">
                        <div class="popup-title">${location.name}</div>
                        <div class="popup-info">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>${location.address}</span>
                            </div>
                        </div>
                        <div class="popup-contact">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>${location.phone}</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>${location.email}</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <span>${location.hours}</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-tooth"></i>
                                <span>${location.services}</span>
                            </div>
                        </div>
                    </div>
                `);
        });

        // Adiciona controle de tela cheia
        map.addControl(new L.Control.Fullscreen());
    </script>
</body>

</html>