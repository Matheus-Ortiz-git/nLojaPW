
<?php
$conn = new mysqli("localhost", "root", "", "loja");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT p.id, p.nome, p.preco, i.imagem 
        FROM produtos p 
        LEFT JOIN imagens i ON p.id = i.produto_id";
$result = $conn->query($sql);

$produtos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produtos[$row['id']]['nome'] = $row['nome'];
        $produtos[$row['id']]['preco'] = $row['preco'];
        $produtos[$row['id']]['imagens'][] = $row['imagem'];
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <?php foreach ($produtos as $id => $produto): ?>
        <div>
            <h2><?php echo htmlspecialchars($produto['nome']); ?></h2>
            <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            <?php foreach ($produto['imagens'] as $imagem): ?>
                <img src="uploads/<?php echo htmlspecialchars($imagem); ?>" alt="Imagem do Produto" width="100">
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
