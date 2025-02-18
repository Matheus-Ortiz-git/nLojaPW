

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class="header-inner-content">
        <div class="header-bottom-side">
            <div class="header-bottom-side-left">
                
            <h1>Seja bem-vindo a nossa loja</h1>
                <p>Aqui, nossa paixão é proporcionar a você uma experiência de compra única e agradável.
                     Oferecemos uma ampla variedade de produtos de alta qualidade, selecionados com carinho para atender às suas
                      necessidades e superar suas expectativas. Nosso compromisso é com a excelência no atendimento ao cliente,
                       preços competitivos e produtos que fazem a diferença no seu dia a dia.
                </p>
                <a href="<?=URL?>/pagina/detalheP"><button> VER</button></a>
            </div>
            
            <div class="header-bottom-side-right">
                <img src="https://www.calitta.com/22696-thickbox_default/vestido-das-mulheres-branco-modelo-social-para-trabalho-curto-manga-midi.jpg" alt="modelo">
            </div>
        </div>
    </div>
    
    <?php
    include "produtos.php";
    ?>


 
    
</div>
</div>
<script>     


function adicionarAoCarrinho(nome, preco) {
            let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
            carrinho.push({ nome, preco });
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            alert(nome + ' adicionado ao carrinho!');
        }

    </script>