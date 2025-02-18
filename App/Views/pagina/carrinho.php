

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Carrinho</title>
    <style>
        .container {
            border: solid 1px black;
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
            width: 100%;
        }
        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .total {
            font-weight: bold;
            margin-top: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            align-items:end;
        }
        button:hover {
            background-color: #45a049;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Seu Carrinho</h2>
        <div id="itensCarrinho"></div>
        <div class="total" id="totalCarrinho"></div>
        <button onclick="finalizarCompra()">Finalizar Compra</button>
    </div>

    <?php
    include "carrosel.php";
    ?>

    <script>
        function carregarCarrinho() {
            const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
            const itensCarrinho = document.getElementById('itensCarrinho');
            const totalCarrinho = document.getElementById('totalCarrinho');
            let total = 0;

            itensCarrinho.innerHTML = '';
            carrinho.forEach(item => {
                const divItem = document.createElement('div');
                divItem.className = 'item';
                divItem.innerHTML = `<span>${item.nome}</span><span>R$ ${item.preco.toFixed(2)}</span>`;
                itensCarrinho.appendChild(divItem);
                total += item.preco;
            });

            totalCarrinho.innerHTML = `Total: R$ ${total.toFixed(2)}`;
        }

        function finalizarCompra() {
            alert('Compra finalizada com sucesso!');
            localStorage.removeItem('carrinho');
            carregarCarrinho();
        }

        window.onload = carregarCarrinho;
    </script>
</body>
</html>
