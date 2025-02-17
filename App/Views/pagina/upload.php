<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagens = $_FILES['imagens'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "loja");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Insere o produto no banco de dados
    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";
    if ($conn->query($sql) === TRUE) {
        $produto_id = $conn->insert_id;
        echo "Produto adicionado com sucesso. ID do produto: $produto_id<br>";

        // Loop através das imagens e as move para o diretório de upload
        foreach ($imagens['tmp_name'] as $key => $tmp_name) {
            $imagem_nome = $imagens['name'][$key];
            $target = "uploads/" . basename($imagem_nome);

            if (move_uploaded_file($tmp_name, $target)) {
                // Insere o caminho da imagem no banco de dados
                $sql = "INSERT INTO imagens (produto_id, imagem) VALUES ('$produto_id', '$imagem_nome')";
                if ($conn->query($sql) === TRUE) {
                    echo "Imagem " . htmlspecialchars($imagem_nome) . " foi salva com sucesso.<br>";
                } else {
                    echo "Erro ao salvar imagem no banco de dados: " . $conn->error . "<br>";
                }
            } else {
                echo "Erro ao mover imagem " . htmlspecialchars($imagem_nome) . " para o diretório uploads.<br>";
            }
        }
    } else {
        echo "Erro ao adicionar produto: " . $conn->error . "<br>";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagens</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form class="inserir-imagem" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="text" name="preco" placeholder="Preço" required>
        <input type="file" name="imagens[]" multiple required>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens Carregadas</title>
</head>
<body>
    <h1>Imagens Carregadas</h1>
    <?php
    $conn = new mysqli("localhost", "root", "", "loja");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM imagens";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<p>Produto ID: " . htmlspecialchars($row['produto_id']) . "</p>";
            echo "<img src='uploads/" . htmlspecialchars($row['imagem']) . "' alt='Imagem do Produto' width='200'>";
            echo "</div>";
        }
    } else {
        echo "Nenhuma imagem encontrada.";
    }

    $conn->close();
    ?>
</body>
</html>
