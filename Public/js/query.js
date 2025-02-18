const carrinho = [];
let total = 0;

function adicionarAoCarrinho(nome, preco) {
    carrinho.push({ nome, preco });
    total += preco;
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const itensCarrinho = document.getElementById('itensCarrinho');
    itensCarrinho.innerHTML = '';
    carrinho.forEach(item => {
        const divItem = document.createElement('div');
        divItem.className = 'item';
        divItem.innerHTML = `<span>${item.nome}</span><span>R$ ${item.preco.toFixed(2)}</span>`;
        itensCarrinho.appendChild(divItem);
    });
    document.getElementById('totalCarrinho').innerText = `R$ ${total.toFixed(2)}`;
}