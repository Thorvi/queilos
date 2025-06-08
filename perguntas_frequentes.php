<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas Frequentes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/perguntas_frequentes.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <section class="banner-introducao-geral">
        <h1>Perguntas Frequentes</h1>
        <p class="subtitle">Tire suas dúvidas sobre fissura labiopalatina</p>
    </section>

    <section class="title">
        <div class="toggle-container">
            <div class="toggle-item">
                <div class="toggle-header">O que é fissura labiopalatina?</div>
                <div class="toggle-content">
                    A fissura labiopalatina(FLP) é uma malformação congênita que ocorre quando os tecidos do 
                    lábio e/ou palato (céu da boca) não se unem completamente durante o 
                    desenvolvimento embrionário. Esta condição resulta em uma abertura 
                    ou fenda que pode afetar o lábio, o palato ou ambos.
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Como é diagnosticada a fissura labiopalatina?</div>
                <div class="toggle-content">
                    O diagnóstico pode ser realizado logo nas primeiras semanas (por volta da 14ª semana) 
                    de gestação através de ultrassom, ou ser visualizada logo após o nascimento do bebê.
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Quais são as causas da fissura labiopalatina?</div>
                <div class="toggle-content">
                    As causas da fissura labiopalatina são multifatoriais, podem ser causas genéticas e/ou 
                    ambientais (ex: ingestão de substâncias tóxicas durante a gravidez e infecções da mãe).
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Como é feito o tratamento da fissura labiopalatina?</div>
                <div class="toggle-content">
                    O tratamento da fissura labiopalatina é seguido de acompanhamento multidisciplinar, 
                    é geralmente cirúrgico. Equipe base normalmente necessária:<br><br>
                    • Cirurgião plástico: para correções cirúrgicas<br>
                    • Fonoaudiólogo: para terapia da fala e alimentação<br>
                    • Ortodontista/Odontopediatra: para cuidados dentários<br>
                    • Otorrinolaringologista: para questões auditivas<br>
                    • Psicólogo: para suporte emocional<br>
                    • Assistente social: para orientação e suporte familiar
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Quais são os impactos causados pela fissura labiopalatina?</div>
                <div class="toggle-content">
                    A fissura labiopalatina tem diversos impactos, desde problemas físicos como a dificuldade 
                    de alimentação, de respiração e na fala, falhas no desenvolvimento dentário e até 
                    aspectos psicossociais.
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Onde posso encontrar ajuda para tratar a fissura labiopalatina?</div>
                <div class="toggle-content">
                    No Brasil, o tratamento da fissura labiopalatina é oferecido gratuitamente pelo Sistema 
                    Único de Saúde (SUS) através de centros especializados. Existem também organizações 
                    não-governamentais que oferecem suporte às famílias e promovem a conscientização 
                    sobre a condição. Na nossa aba "centros de atendimento" você pode encontrá-los.
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Sou pai de uma criança com fissura labiopalatina, o que devo fazer?</div>
                <div class="toggle-content">
                    O nascimento de uma criança com fissura labiopalatina pode gerar ansiedade e dúvidas. 
                    É fundamental:<br><br>
                    • Buscar informações confiáveis<br>
                    • Conectar-se com outros pais em situação similar<br>
                    • Manter acompanhamento médico regular<br>
                    • Investir no vínculo afetivo com a criança<br>
                    • Lembrar que o tratamento é eficaz e o prognóstico é favorável
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Como é a cirurgia para corrigir a fissura?</div>
                <div class="toggle-content">
                    A primeira cirurgia geralmente acontece entre 3 e 6 meses (para o lábio) e depois, 
                    entre 9 e 18 meses (para o palato). Outras etapas podem ocorrer durante o crescimento da criança, dependendo do caso.
                </div>
            </div>
            
            <div class="toggle-item">
                <div class="toggle-header">Quanto tempo dura o tratamento da fissura labiopalatina?</div>
                <div class="toggle-content">
                    O tratamento de fissura labiopalatina é um processo prolongado, que pode durar até 
                    18 anos, com intervenções cirúrgicas e acompanhamento especializado. A reparação 
                    do lábio é geralmente feita entre os 3 meses e o primeiro ano de vida, enquanto o 
                    palato é reparado por volta dos 12 meses, com possibilidade de intervenções 
                    adicionais ao longo do crescimento.
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

<script>
document.querySelectorAll('.toggle-header').forEach(header => {
    header.addEventListener('click', () => {
        const item = header.parentElement;
        item.classList.toggle('active');
        
        // Fecha os outros itens abertos
        document.querySelectorAll('.toggle-item').forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });
    });
});
</script>
</body>
</html>
