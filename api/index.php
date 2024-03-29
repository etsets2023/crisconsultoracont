<?php
// Define o nome do arquivo de texto que irá armazenar o contador
$contadorArquivo = 'contador.php';

// Verifica se o arquivo de contador existe
if (file_exists($contadorArquivo)) {
    // Lê o número atual de visitas a partir do arquivo
    $visitas = file_get_contents($contadorArquivo);

    // Incrementa o número de visitas
    $visitas++;

    // Atualiza o arquivo com o novo número de visitas
    file_put_contents($contadorArquivo, $visitas);
} else {
    // Se o arquivo de contador não existir, cria ele com a primeira visita
    $visitas = 1;
    file_put_contents($contadorArquivo, $visitas);
}

// Exibe o número de visitas
//echo "Número de visitas: $visitas";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristiane - Corretora</title>
    <!-- BOOTSTRAP ICONS @1.9.1-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--SWIPER @11.0.7-->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">


    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/slide_vila_talisia.css">
    <script src="./js/index.js" defer></script>
    <script src="./js/slide.js" defer></script>
    <script src="./js/filtro.js"></script>
    <script src="slide_vila_talisia"></script>

</head>
<body id="corpo" onload="mudarBackground()">
    <header>
        <nav>
            <div>
                <h2>Cristiane <br> Consultora Imobiliária </h2> 
                <h3>CRECI: 215654-F</h3>
            </div>
            <div class="nav_telefone">
                <i class="bi bi-telephone-fill"></i>
                <i style="margin-left: 4px;" class="bi bi-whatsapp"></i>
                <p>(19) 99238-0502</p>
                <a class="nav_entreemcontato" href="https://wa.me/message/TL3CYF4ZWSIFM1" target="_blank">Entre em contato agora!</a>
            </div>
        </nav>
    </header>

    <main class="principal">
          <div class="main_wrapper" data-anime="left">
            <div class="main_container">
                <h3>Missão</h3>
                <p>Fornecer um serviço de excelência na compra, venda e locação de imóveis, ajudando os clientes a realizar seus sonhos e objetivos de forma segura e eficiente.</p>
                <hr>
            </div>
            <div class="main_container">
                <h3>Visão</h3>
                <p>Ser a corretora de imóveis mais admirada e respeitada do mercado, reconhecida por sua excelência em atendimento, inovação e resultados.
                    Ser a primeira escolha dos clientes que buscam comprar, vender ou alugar um imóvel.</p>
                <hr>
            </div>
            <div class="main_container">
                <h3>Valores</h3>
                <p>Os pilares dos nossos valores são a ética, comprometimento, excelência, inovação, trabalho em equipe e responsabilidade social</p>
                <hr>
            </div>
            <div class="main_container container_button">
                <a class="main_button" href="https://wa.me/message/TL3CYF4ZWSIFM1" target="_blank">Entre em contato agora</a>
            </div>
        </div>
        <form class="contato" action="" data-anime="left">
            <h2>Contato</h2>
            <div class="form_container">
                <input type="text" placeholder="Nome:">  
            </div>
            <div class="form_container">
                <input type="email" placeholder="Email:">  
            </div>
            <div class="form_container">
                <input type="tel" placeholder="Telefone:">   
            </div>
            <div class="form_container_button">
                <a class="form_button" href="#">Enviar</a>
            </div>
        </form>      
    </main>

    <section class="apresentacao" >
        <div style="width: 100%;" data-anime="down">
            <h2>Vamos te proporcionar uma experiência incrível!</h2>
        </div>   

        <!--<div class="apresentacao_container" data-anime="left">       
            <img src="./img/pao_de_acucar.jpg" alt="">
        </div>-->

        <!-------------------------DEPOIMENTOS----------------------->
        <div class="swiper mySwiper" data-anime="left">
            <h3>O que nossos clientes dizem</h3>
            <div class="swiper-wrapper">     
              <div class="swiper-slide slide1">
                <img src="./img/depoimento3.png" alt="">
              </div>
              <div class="swiper-slide slide2">
                <img src="./img/depoimento2.png" alt="">
              </div>
              <div class="swiper-slide slide3">
                <img src="./img/depoimento1.png" alt="">
              </div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <!-------------------------FIM DEPOIMENTOS----------------------->
        
        <div class="apresentacao_container" data-anime="left">
            <p>Os pilares dos nossos valores são a ética, comprometimento, excelência, inovação, trabalho em equipe e responsabilidade social. <br>
                Ética: Atuar com honestidade, transparência e profissionalismo em todas as relações. <br>
                Comprometimento: Atender às necessidades dos clientes com dedicação, entusiasmo e proatividade. <br>
                Excelência: Buscar a qualidade em tudo que faz, desde a captação de imóveis até o pós-venda. <br>
                Inovação: Buscar constantemente novas soluções para atender às necessidades dos clientes e do mercado. <br>
                Trabalho em equipe: Acreditar na força do trabalho em equipe para alcançar os melhores resultados. <br>
                Responsabilidade social: Contribuir para o desenvolvimento da comunidade e para a preservação do meio ambiente.</p>
            <a class="main_button button" href="https://wa.me/message/TL3CYF4ZWSIFM1" target="_blank">Entre em contato agora</a>
        </div>
    </section>

    <section class="botoes">
        <h2>Nossos Empreendimentos</h2>
        <!---- <div class="botoes_container">
            <button onclick="filterElements('todos')">Todos</button>
            <button onclick="filterElements('na_planta')">Na Planta</button>
            <button onclick="filterElements('prontos_para_morar')">Prontos Para Morar</button>
        </div>-->
    </section>

    <!----------------------PARA VENDA------------------------->
    <!--<section class="imoveis todos box">
        <h2>PARA VENDA</h2>
        <div class="imoveis_container">
            
        </div>
      
    </section>-->
    <!----------------------FIM PARA VENDA E LOCAÇÃO--------------------->

    <!----------------------IMOVEIS NA PLANTA---------------------------->
    <section class="imoveis todos na_planta box">
        <h2>NA PLANTA</h2>
        <div class="imoveis_container">

            <div class="imoveis_container_imovel">
                <video src="./img/videos/Casas_na_Planta_em_Monte_Mor_e_Hortolândia.mp4" controls></video>
                <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">

                        Lançamento de Casas na Planta em Monte Mor e Hortolândia!!! <br>
                        • Casas de 42m², 55m², 65m² e 80m² <br>
                        • Terrenos de 160m² (Monte Mor) e 125m² (Hortolândia) <br>
                        • Pé direito de 4,5 metros <br>
                        • Casas já muradas e com portão <br>
                        • Escolha entre 4 fachadas diferentes <br>
                        • Piso porcelanato na casa toda <br>
                        • Pontos de ar-condicionado <br>
                        • Cliente escolhe o piso e as cores da casa <br>
                        • Opção de piscina <br>
                        • Valor promocional de R$ 250.170,00 (42m2) para as 7 primeiras unidades <br>
                        • Financiamento pela Caixa Econômica Federal <br>
                        • Aceita FGTS <br> <br>
                        Mais informações: <br>
                        • WhatsApp: 19 981360145 <br>
                        • CRECI: 215654-F <br> <br>
                        Visitas: <br>
                        • Temos casas em construção e podemos agendar um horário para você conhecer toda a estrutura. <br>
                        Condições de Financiamento <br>
                        • Entrada de até 27x <br>
                        • Financiamento pela Caixa Econômica Federal <br>
                        • Aceita FGTS <br>
                        • Aceita carro como entrada <br> <br>
                        Localização <br>
                        • Monte Mor: Condomínio Monterrey <br>
                        • Hortolândia: Jardim Amanda <br> <br>
                        Agende uma visita e conheça essas lindas casas!
                    </p>
                </div>
            </div>

            <div class="imoveis_container_imovel">
                <video src="./img/videos/jardim_amanda_bairo_aberto.mp4" controls></video>
                <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">

                        FINANCIAMENTO CAIXA ECONÔMICA FEDERAL #FGTS    <br>  
                        QUER MORAR EM UM BAIRRO SMART COM CASA SHOW? <br>                                                                                      
                        HORTOLÂNDIA - JARDIM AMANDA BAIRO ABERTO!!    <br>  
                        O que Teremos? <br>                                                                                           
                        Praça Esportiva: <br>
                        Viva o esporte em nossa moderna praça para atividades físicas e diversão ao ar livre. <br><br>
                        Ciclovia: <br>
                        Explore uma região com segurança e lazer em nossa ciclovia dedicada <br> <br>
                        Parque infantil: <br>
                        Diversão garantida para as crianças em nosso playground seguro e estimulante <br> <br>
                        Área Verde: <br>
                        Relaxe e reconecte-se em nossa área verde exuberante e tranquila <br> <br>
                        Locais para animais de estimação: <br>
                        Espaços projetados para o bem-estar dos pets, fortalecendo laços <br> <br>
                        Espaços Cadeirantes: <br>
                        Inclusão total: áreas pensadas para acessibilidade e conforto a todos <br>
                    </p>
                </div>
            </div> 

            <div class="imoveis_container_imovel imovel_relative">
                <img src="./img/casas_na_planta.png" alt="">
                <a href="https://www.3dexplora.com.br/seutour.aspx?codigo=F1PpvpT2jfS&play=1&hl=0&qs=1&wh=1&lp=0&ts=1&fbclid=IwAR12ux4HhRLBmPG8aXJcvuGExRfDEznFr4iqkThJUNNixwraz2pC1KO7Ih0" target="_blank">Veja o tour virtual!</a>
                <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">
                        Casas na Planta<br>
                        Seu sonho de viver em meio à natureza, com segurança e praticidade, se torna realidade no Reserva dos Ipês.
                        Imagine...

                        Acordar com o canto dos pássaros e a brisa suave em seu rosto.
                        Ter a segurança de um condomínio fechado, sem abrir mão da liberdade de uma casa.
                        Estar a poucos minutos de tudo que você precisa, sem o estresse do trânsito.
                        Desfrutar de momentos inesquecíveis com sua família em um ambiente tranquilo e arborizado.
                        Tudo isso te espera no Reserva dos Ipês!

                        Casas aconchegantes para todos os estilos:

                        Plantas de 71m², 72m² e 85m²
                        Três dormitórios (sendo uma suíte)
                        Até duas vagas de garagem
                        Localização privilegiada:

                        2 minutos do trevo de entrada da cidade
                        10 minutos da região central
                        5 minutos do Jd Rosolém (com bancos, farmácias, comércio, escolas, praças e muito mais)
                        Lazer completo para toda a família:

                        Redário
                        Mesas de jogos ao ar livre
                        Quadra poliesportiva
                        Playground
                        Piscina
                        Espaço para festas
                        Churrasqueira
                        Espaço pet
                        Área fitness
                        Pista de caminhada
                        Ao lado do Parque Socioambiental Antonio Gazzetta:

                        Uma importante área verde em expansão
                        Privilégio de morar ao lado da natureza
                        Qualidade de vida constante
                        Reserva dos Ipês: a sua chance de realizar o sonho da casa própria!

                        Entre em contato conosco e agende sua visita.
                        
                    </p>
                </div>
            </div> 
               
        </div>      
    </section>
    <!----------------------FIM IMOVEIS NA PLANTA------------------------>

    <!----------------------PRONTO PARA MORAR---------------------------->
    <section class="imoveis todos prontos_para_morar box" >
        <h2>PRONTOS PARA MORAR</h2>
        <div class="imoveis_container">
            <div class="imoveis_container_imovel vila_slide">  
                  <!-- <img src="./img/condominio_eco_vila_talisia_pronto_para_morar1.jpeg" alt=""> -->

                  <div class="swiper vila_talisia">
                    <div class="swiper-wrapper slide_vila">
                      <div class="swiper-slide slide_img">
                        <img class="img_vila" src="./img/condominio_eco_vila_talisia_pronto_para_morar1.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar2.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar2.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar2.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar3.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar3.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar4.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar4.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar5.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar5.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar6.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar6.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar7.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar7.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar8.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar8.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                      <div class="swiper-slide"><img src="./img/condominio_eco_vila_talisia_pronto_para_morar9.jpeg" alt="">
                        <a class="link_vila" href="./img/condominio_eco_vila_talisia_pronto_para_morar9.jpeg" target="_blank">Ampliar a imagem</a>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>

                  <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">

                        Apartamento no Condomínio Eco Vila Talisia - Hortolândia/SP <br>
                        Localização privilegiada: <br>
                        A 5 minutos do centro de Hortolândia <br>
                        A 26 minutos do centro de Campinas <br>
                        Fácil acesso a grandes empresas da região (Adere, Honda, EMS, HAVAN, IBM, etc.) <br>
                        Infraestrutura completa de bairro com mercados, padarias, farmácias, escolas, creche, academias, posto de combustível, posto de saúde, sorveterias, etc. <br>
                        Fácil acesso às principais rodovias (Bandeirantes, Anhanguera, SP 101 Campinas Monte Mor). <br><br>
                        Características do apartamento: <br>
                        Dois quartos, sendo um sem suíte <br>
                        Varanda gourmet com possibilidade de colocar churrasqueira <br>
                        Aquecimento a gás (incluso no valor do condomínio) <br>
                        Entrada para ar condicionado na sala e quarto <br>
                        Área útil: 56m² <br> <br>
                        Lazer completo: <br>
                        Cinema <br>
                        Sala coworking <br>
                        Cozinha gourmet <br>
                        Churrasqueira <br>
                        Academia <br>
                        Área kids <br>
                        Área de jogos <br>
                        Piscina <br>
                        Quadra de futebol <br> <br>
                        Investimento: <br>
                        Valor R$ 360.000,00 (consulte disponibilidade e valores atualizados) aceita proposta <br>
                        Oportunidade imperdível de viver com conforto, segurança e lazer completo em Hortolândia!  <br> Entre em contato agora mesmo e agende sua visita. <br>
                        Número de torres: 2 <br>
                        Número de andares: 14 <br>
                        Número de apartamentos por andar: 4 <br>
                        Vagas de garagem: 1 vaga <br>
                        Portaria: 24 horas <br>
                        Elevador <br>
                        Segurança: monitoramento por câmeras <br>
                        Pet friendly
                    </p>
                </div>
            </div>

            <div class="imoveis_container_imovel">
                <video src="./img/videos/real_park_sumare.mp4" controls></video>
                <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">

                        Imóvel localizado no condomínio: <br>
                        Real Park Sumaré, terreno de 250 metros com 160 metros de construção. <br>
                        Possui garagem para 2 carros cobertos e mais 2 carros descobertos. <br>
                        Garagem e platibanda superior forrada com ripado em madeira envernizada. <br>
                        Lustre de cristais de 2.6 metros na sala e iluminação moderna no restante da casa. <br>
                        1 suíte com móveis planejados, banheira/ hidromassagem e porta balcão para o quintal gramado. <br>
                        O banheiro da suíte contém duas cubas para melhor conforto, e box até o teto,  igual o banheiro social. <br>
                        Banheiro social seguindo o mesmo padrão da suíte,  ambos com nicho grande dentro do box e armários planejados. <br>
                        Tem mais dois quartos bem confortáveis, todos os quartos com piso laminado. <br>
                        Possui um lavabo no corredor seguindo o padrão de acabamento dos outros banheiros. <br>
                        Sala de jantar ampla e cozinha com móveis planejados inclusive na ilha central preparada para área quente. <br>
                        Ao fundo tem uma bela área gourmet, com churrasqueira moderna, também com móveis planejados.
                    </p>
                </div>
            </div>

            <div class="imoveis_container_imovel">
                <video src="./img/videos/WhatsApp Video 2024-02-27 at 11.43.51.mp4" controls></video>
                <div class="imoveis_container_texto">
                    <p class="imoveis_paragrafo" style="color: black; font-size: 1rem; font-weight: 300;">Apartamento em hortolandia para VENDA<br>

                        CONDOMINIO PORTAL DOS RUBIS. <br>
                        Apartamento completo por armários em todos os comodos.
                        Ar condicionado na sala, cozinha estilo "ilha" já com cooktop 5 bocas instalado.
                        Cozinha planejada com armários novos.
                        Quartos com guarda roupas embutido e sapateira. <br>
                        02 dormitorios sendo 1 suite e sacada na sala.
                        Vaga para 1 carro descoberto. <br>
                        Apartamento localizado no 8º Andar. <br>
                        
                        **Não incluso os eletrodomésticos. <br>
                        
                        Condominio conta com portaria e segurança 24h, quadra poliesportiva, quiosque para churrasco, piscina e salão de festas.
                        Possui 02 elevadores. <br> <br>
                        
                        Valor Venda: R$ 350.000,00 
                    </p>
                </div>
            </div>         

               
      </div>  
      <div class="imoveis_container">
        <a class="main_button" href="#">Confira nosso portfólio</a>
    </div>  
    </section>
    <!----------------------FIM PRONTO PARA MORAR------------------------>

    <section class="simulacao">
    
        <h2 style="text-align: center;">Faça agora uma simulação gratuita!</h2>
        <h3 style="margin-bottom: 30px; text-align: center;">Preencha o Formulário abaixo:</h3>
        <form class="simulacao_formulario" action="https://formsubmit.co/cris_gabriel7@yahoo.com.br"  method="POST">
            <div class="formulario_nome_email_telefone">
                <div class="label-float">  
                    <label for="nome">Nome:*</label>  
                    <input type="text" id="nome" name="nome" required>      
                </div>
                <div class="label-float"> 
                    <label for="email">E-mail:*</label> 
                    <input type="email" id="email" name="email" required>  
                </div>
                <div class="label-float"> 
                    <label for="telefone:">Telefone:*</label> 
                    <input type="text" id="telefone" name="telefone" required> 
                </div>
            </div>

            
            <div class="label-float">
                <label for="renda">Valor de renda bruta individual ou familiar. A referência de renda bruta no caso de Holerite é o total de Proventos/Vencimentos; Em caso de renda informal informar a média de renda mensal </label>
                <select name="renda" id="renda" class="renda">
                    <option selected disabled value="">Selecione</option>
                    <option value="R$1.500,00 à R$2.500,00" id="renda" name="renda">R$1.500,00 à R$2.500,00</option>
                    <option value="R$2.500,00 à R$3.500,00" id="renda" name="renda">R$2.500,00 à R$3.500,00</option>
                    <option value="R$4.500,00 à R$5.500,00" id="renda" name="renda">R$4.500,00 à R$5.500,00</option>
                    <option value="R$5.000,00 à R$6.500,00" id="renda" name="renda">R$5.000,00 à R$6.500,00</option>
                    <option value="R$6.500,00 à R$8.000,00" id="renda" name="renda">R$6.500,00 à R$8.000,00</option>
                    <option value="Acima de R$ 8.001,00" id="renda" name="renda">Acima de R$ 8.001,00</option>
                </select>
            </div>

            <div class="label_float cltfgts">
                <label class="cltfgts_label" for="">Possui 36 meses sob regime CLT e contribuição com FGTS? ( pode somar todos períodos que tenha trabalhado, mesmo não sendo no emprego atual; Se for com mais de um participante no financiamento, um dos participantes tendo comprovado já consegue o beneficio de desconto de 0,5% e a liberação para utilizar o FGTS ** Seguindo as regras do programa) </label> <br>
                <input type="radio" name="clt/fgts" id="sim" value="Sim, possuo 36 meses"> <label for="sim">Sim, possuo 36 meses</label> 
                <input type="radio" name="clt/fgts" id="nao" value="Não possuo 36 meses" style="margin-top: 5px; margin-left: 3%;"> <label for="nao">Não possuo 36 meses</label>
            </div>

            <div class="label_float data_de_nascimento">
                <label for="data">Data de Nascimento do participante de maior idade </label>
                <input type="date" name="data de nascimento participante de maior idade">
            </div>

            <div class="label_float dependentes">
                <label for="">Possui dependentes abaixo de 18 anos?</label> <br>
                <input type="radio" name="dependente" value="Sim"> <label for="dependente">Sim</label> <br>
                <input type="radio" name="dependente" value="Não" style="margin-top: 5px;"> <label for="dependente">Não</label>
            </div>

            <div class="label_float entrada">
                <label for="">Possui valor para entrada ou valor de FGTS?</label> <br>
                <input type="radio" name="entrada" value="Sim , qual valor R$"> <label for="entrada">Sim , qual valor? R$</label> <input type="text" id="entrada" name="valor da entrada" placeholder=""> <br>
                <input type="radio" name="entrada" value="Não" style="margin-top: 5px;"> <label for="entrada">Não</label>
            </div>

            <div class="label_float primeiro_imovel">
                <label for="">Primeiro imóvel?</label> <br>
                <input type="radio" name="imovel" value="Sim, ainda não possuo imóvel."> <label for="imovel">Sim, ainda não possuo imóvel.</label> <br>
                <input type="radio" name="imovel" value="Não, já tenho um imóvel." style="margin-top: 5px;"> <label for="imovel">Não, já tenho um imóvel.</label>
            </div>
            
            <div class="container-formulario-botao">
                <button class="formulario-botao" id="enviar">Enviar</button>
            </div>
        </form>


    </section>

    <footer data-anime="down">
        <div class="hidden footer_container footer_creci">
            <h2>Cristiane <br> Consultora Imobiliária <span style="font-size: 10px;"> ©2024 </span></h2>
            <h3 style="color: white;">CRECI: 215654-F</h3>
        </div>
        <div class="hidden footer_container">   
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/message/TL3CYF4ZWSIFM1" target="_blank"><i class="bi bi-whatsapp"></i></a>
            <div class="footer_email">
              <i class="bi bi-envelope"></i>
              <div>
                <a href="mailto:cris_cris@creci.org.br" target="_blank"><p style="color: white;">cris_cris@creci.org.br</p></a>
                <a href="mailto:cris_gabriel7@yahoo.com.br" target="_blank"><p style="color: white;">cris_gabriel7@yahoo.com.br</p></a>  
              </div>
            </div>
            
        </div>
    </footer>
    <a href="https://wa.me/message/TL3CYF4ZWSIFM1" target="_blank"> <img class="whats" src="./img/whatsapp-semfundo.png" alt=""></a>
  
    <!--SWIPER JS @11.0.7-->
 <script src="./js/swiper-bundle.min.js"></script>

 <script>
    var swiper = new Swiper(".vila_talisia", {
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay:{
        delay:5000,
        disableInteraction: false,
    },
    mousewheel: true,
    keyboard: true,
  });

 </script>
</body>
</html>



