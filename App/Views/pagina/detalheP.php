<?php
$conn = new mysqli("localhost", "root", "", "loja");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = (int)$_GET['id'];

$sql = "SELECT p.id, p.nome, p.preco, i.imagem
        FROM produtos p
        LEFT JOIN imagens i ON p.id = i.produto_id
        WHERE p.id = $id";
$result = $conn->query($sql);

$produto = []; // Certifique-se de que o array $produto seja inicializado corretamente
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produto['nome'] = $row['nome'];
        $produto['preco'] = $row['preco'];
        $produto['imagens'][] = $row['imagem'];
    }
} else {
    echo "Nenhum produto encontrado.";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($produto['nome']); ?></h1>
    <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
    <?php if (!empty($produto['imagens'])): ?>
        <?php foreach ($produto['imagens'] as $imagem): ?>
            <img src="uploads/<?php echo htmlspecialchars($imagem); ?>" alt="Imagem do Produto" width="300">
        <?php endforeach; ?>
    <?php else: ?>
        <p>Sem imagens disponíveis.</p>
    <?php endif; ?>
    <a href="index.php">Voltar aos Produtos</a>
</body>
</html>
