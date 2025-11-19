<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$controllerPath = __DIR__ . '/../controller/BibliotecaController.php';

if (!file_exists($controllerPath)) {
    die("Erro: arquivo não encontrado: $controllerPath");
}

require_once $controllerPath;

$controller = new BibliotecaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['acao'] === 'criar') {
        $controller->criar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        );
    }

    if ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['titulo']);
    }
}

$livros = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title id="titulo_principal">Biblioteca - CRUD</title>
</head>
<body>


    <h1>Cadastro de Livros</h1>

    <form method="POST">
        <input type="hidden" name="acao" value="criar">

        <label>Título:</label>
        <input type="text" name="titulo" required><br>

        <label>Autor:</label>
        <input type="text" name="autor" required><br>

        <label>Ano:</label>
        <input type="number" name="ano" required><br>

        <label>Gênero:</label>
        <input type="text" name="genero" required><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required><br><br>

        <button type="submit">Cadastrar Livro</button>
    </form>

    <hr>

    <h2>Livros Cadastrados</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th>Gênero</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= htmlspecialchars($livro->getTitulo()); ?></td>
                <td><?= htmlspecialchars($livro->getAutor()); ?></td>
                <td><?= htmlspecialchars($livro->getAno()); ?></td>
                <td><?= htmlspecialchars($livro->getGenero()); ?></td>
                <td><?= htmlspecialchars($livro->getQuantidade()); ?></td>

                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="titulo" value="<?= htmlspecialchars($livro->getTitulo()); ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>
