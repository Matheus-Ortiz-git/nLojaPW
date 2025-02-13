
<h1><?php echo $dados['titulo']; ?></h1>
<p><?php echo $dados['descricao']; ?></p>




<div class="header-inner-content">
        <div class="header-bottom-side">
            <div class="header-bottom-side-left">
                
            <h1>Seja bem-vindo a nossa loja</h1>
                <p>Aqui, nossa paixão é proporcionar a você uma experiência de compra única e agradável.
                     Oferecemos uma ampla variedade de produtos de alta qualidade, selecionados com carinho para atender às suas
                      necessidades e superar suas expectativas. Nosso compromisso é com a excelência no atendimento ao cliente,
                       preços competitivos e produtos que fazem a diferença no seu dia a dia.
                </p>
                <button>VER</button>
            </div>
            
            <div class="header-bottom-side-right">
                <img src="https://www.calitta.com/22696-thickbox_default/vestido-das-mulheres-branco-modelo-social-para-trabalho-curto-manga-midi.jpg" alt="modelo">
            </div>
        </div>
    </div>


<div class="container" id="container">
    <h2>Nossos Produtos</h2>


    <?php foreach ($dados['produto'] as $produto) : ?>
    <div class="products">
    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/58750822-300-360?v=638542433613300000&width=300&height=360&aspect=true" alt="Produto 1">
        <h3> <?= $produto->nome_produto?></h3>
        <p>  <?= $produto->especificacao_produto?></p>
        <p>  <?= $prtoduto->preco_produto?></p>
        <button onclick="addToCart('Produto 1', 40)">Comprar</button>
    </div>
    
    <?php endforeach ?>




    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/59097768-300-360?v=638664236149630000&width=300&height=360&aspect=true" alt="Produto 2">
        <h3>Saia midi godê</h3>
        <p>Jeans cintura super alta azul</p>
        <p>Preço: R$ 20,00</p>
        <button onclick="addToCart('Produto 2', 20)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://cea.vtexassets.com/arquivos/ids/58399350-300-360?v=638387674029730000&width=300&height=360&aspect=true" alt="Produto 3">
        <h3>Short</h3>
        <p>Jeans cintura alta média barra fio azul claro</p>
        <p>Preço: R$ 20,00</p>
        <button onclick="addToCart('Produto 3', 20)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://donnamodelli.com.br/resources/img/roupas-femininas-para-o-natal-2021-saia-de-tricot-midi-pink.jpg" alt="Produto 3">
        <h3>Saia</h3>
        <p>Saia crochê</p>
        <p>Preço: R$ 30,00</p>
        <button onclick="addToCart('Produto 4', 30)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://down-br.img.susercontent.com/file/br-11134207-7qukw-leygcpdv52wbc1" alt="Produto 3">
        <h3>Blusa</h3>
        <p>Blusa branca</p>
        <p>Preço: R$ 30,00</p>
        <button onclick="addToCart('Produto 5', 30)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://img.kwcdn.com/product/fancy/d12058a4-e4b9-486f-b3cc-32615480f8a0.jpg?imageView2/2/w/800/q/70/format/webp" alt="Produto 3">
        <h3>Short Academia</h3>
        <p>Short azul</p>
        <p>Preço: R$ 30,00</p>
        <button onclick="addToCart('Produto 6', 30)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://i.pinimg.com/736x/cc/b3/77/ccb377489d568e5885a625d423344df2.jpg" alt="Produto 3">
        <h3>Vestido florado</h3>
        <p>Estilo camponesa</p>
        <p>Preço: R$ 30,00</p>
        <button onclick="addToCart('Produto 7', 30)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLLD7_1bEpMIZzb6jBk4x1JA6DqD5ZXzoUe0LT-nx6Upd4tq3lLm9At8tJKJ318oY0a5s&usqp=CAU" alt="Produto 3">
        <h3>Vestido comprodo azul</h3>
        <p>Vestido azul</p>
        <p>Preço: R$ 30,00</p>
        <button onclick="addToCart('Produto 8', 30)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQloBrP0nRXsmFaorsNm4F5XCl913iO3wl-jQ&s" alt="Produto 3">
        <h3>Calça pantalona</h3>
        <p>Calça rosa</p>
        <p>Preço: R$ 20,00</p>
        <button onclick="addToCart('Produto 9', 20)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://image-r.zaxapp.com.br/cdn-cgi/image/w=3840/catalog/product/2893876/0c50c95f-2616-4480-a143-cb10d50ccf43.webp" alt="Produto 3">
        <h3>Calça pantalona berge</h3>
        <p>Calça berge</p>
        <p>Preço: R$ 20,00</p>
        <button onclick="addToCart('Produto 10', 20)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://down-br.img.susercontent.com/file/f7a3f03eb2489861846f53b6d65e515e" alt="Produto 3">
        <h3>Jardineira jeans</h3>
        <p>Jardineira jeans feminino</p>
        <p>Preço: R$ 40,00</p>
        <button onclick="addToCart('Produto 11', 40)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://down-br.img.susercontent.com/file/5846cc5d8eee013552b63defd9c9a2f3" alt="Produto 3">
        <h3>Macacão jeans</h3>
        <p>Macacão jeans feminino</p>
        <p>Preço: R$ 20,00</p>
        <button onclick="addToCart('Produto 12', 20)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://acdn.mitiendanube.com/stores/004/397/363/products/tecido-de-qualidade-corte-impecavel-combinacao-versatil-roupas-para-ocasioes-especiais-estilo-contemporaneo-detalhes-sofisticados-manga-longa-9-02875f1f8939d8a81617176961611571-640-0.png" alt="Produto 3">
        <h3>Vestido gala</h3>
        <p>Vestido gala rosa</p>
        <p>Preço: R$ 90,00</p>
        <button onclick="addToCart('Produto 13', 90)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://www.lojastyleme.com.br/cdn/shop/products/169268275153e15b9575dcbefda53e6aeb03c54e9e.jpg?v=1715722609&width=1445" alt="Produto 3">
        <h3>Vestido gala lilas</h3>
        <p>Vestido lilas com fenda</p>
        <p>Preço: R$ 70,00</p>
        <button onclick="addToCart('Produto 14', 70)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://static.wixstatic.com/media/268c55_8659654b6a474e5ca0cceeb36a585e12~mv2.png/v1/fill/w_560,h_700,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/268c55_8659654b6a474e5ca0cceeb36a585e12~mv2.png" alt="Produto 3">
        <h3>Vestido preto gala</h3>
        <p>Vestido preto com decote</p>
        <p>Preço: R$ 80,00</p>
        <button onclick="addToCart('Produto 15', 80)">Comprar</button>
    </div>
    
</div>
    
    

</div>