<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel de Imagens</title>
    <style>
        .carrossel-container {
            width: 80%;
            height: 400px;

            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .carrossel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carrossel img {
            width: 100%;
            display: block;
        }

        .anterior, .proximo {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .anterior {
            left: 10px;
        }

        .proximo {
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="carrossel-container">
        <div class="carrossel" id="carrossel">    <div class="product">
        <img src="https://acdn.mitiendanube.com/stores/004/397/363/products/tecido-de-qualidade-corte-impecavel-combinacao-versatil-roupas-para-ocasioes-especiais-estilo-contemporaneo-detalhes-sofisticados-manga-longa-9-02875f1f8939d8a81617176961611571-640-0.png" alt="Produto 3">
        <h3>Vestido gala</h3>
        <p>Vestido gala rosa</p>
        <p>Preço: R$ 90,00</p>
        <button onclick="adicionarAoCarrinho('Vestido gala rosa', 90)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://www.lojastyleme.com.br/cdn/shop/products/169268275153e15b9575dcbefda53e6aeb03c54e9e.jpg?v=1715722609&width=1445" alt="Produto 3">
        <h3>Vestido gala lilas</h3>
        <p>Vestido lilas com fenda</p>
        <p>Preço: R$ 70,00</p>
        <button onclick="adicionarAoCarrinho('Vestido lilas com fenda', 70)">Comprar</button>
    </div>
    <div class="product">
        <img src="https://static.wixstatic.com/media/268c55_8659654b6a474e5ca0cceeb36a585e12~mv2.png/v1/fill/w_560,h_700,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/268c55_8659654b6a474e5ca0cceeb36a585e12~mv2.png" alt="Produto 3">
        <h3>Vestido preto gala</h3>
        <p>Vestido preto com decote</p>
        <p>Preço: R$ 80,00</p>
        <button onclick="adicionarAoCarrinho('Vestido preto com decote', 80)">Comprar</button>
    </div>
        </div>
        <button class="anterior" onclick="anteriorImagem()">❮</button>
        <button class="proximo" onclick="proximaImagem()">❯</button>
    </div>

    <script>
        let indiceAtual = 0;

        function atualizarCarrossel() {
            const carrossel = document.getElementById('carrossel');
            const larguraImagem = carrossel.children[0].clientWidth;
            carrossel.style.transform = `translateX(${-indiceAtual * larguraImagem}px)`;
        }

        function anteriorImagem() {
            const carrossel = document.getElementById('carrossel');
            indiceAtual = (indiceAtual > 0) ? indiceAtual - 1 : carrossel.children.length - 1;
            atualizarCarrossel();
        }

        function proximaImagem() {
            const carrossel = document.getElementById('carrossel');
            indiceAtual = (indiceAtual < carrossel.children.length - 1) ? indiceAtual + 1 : 0;
            atualizarCarrossel();
        }

        window.addEventListener('resize', atualizarCarrossel);
        atualizarCarrossel();
    </script>
</body>
</html>
