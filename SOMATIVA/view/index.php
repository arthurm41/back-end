<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../controller/BibliotecaController.php';

$controller = new BibliotecaController();

// MENSAGEM DE RETORNO
$msg = isset($_GET['msg']) ? $_GET['msg'] : "";


// Verifica ações
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['acao'] === 'criar') {
        $controller->criar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        );

        header("Location: index.php?msg=📗 Livro cadastrado com sucesso!");
        exit;
    }

    if ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['titulo']);

        header("Location: index.php?msg=🗑️ Livro excluído com sucesso!");
        exit;
    }

    if ($_POST['acao'] === 'atualizar') {
        $controller->atualizar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        );

        header("Location: index.php?msg=✏️ Livro atualizado com sucesso!");
        exit;
    }
}

$editando = false;
$livroEditado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['acao'] === 'editar') {
    $editando = true;
    $livroEditado = $controller->buscarPorTitulo($_POST['titulo']);
}

$livros = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca - CRUD</title>
</head>
<body>

<h1>Cadastro de Livros</h1>

<!-- MENSAGEM (aparece 1 vez) -->
<?php if (!empty($msg)): ?>
<div style="
    padding: 10px;
    background: #ddffdd;
    border: 1px solid green;
    width: 400px;
    margin-bottom: 20px;
">
    <?= htmlspecialchars($msg) ?>
</div>
<?php endif; ?>


<form method="POST">
    <input type="hidden" name="acao" value="<?= $editando ? 'atualizar' : 'criar' ?>">

    <label>Título:</label>
    <input type="text" name="titulo" required
           value="<?= $editando ? $livroEditado->getTitulo() : '' ?>"
           <?= $editando ? 'readonly' : '' ?>><br>

    <label>Autor:</label>
    <input type="text" name="autor" required
           value="<?= $editando ? $livroEditado->getAutor() : '' ?>"><br>

    <label>Ano:</label>
    <input type="number" name="ano" required
           value="<?= $editando ? $livroEditado->getAno() : '' ?>"><br>

    <label>Gênero:</label>
    <input type="text" name="genero" required
           value="<?= $editando ? $livroEditado->getGenero() : '' ?>"><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" required
           value="<?= $editando ? $livroEditado->getQuantidade() : '' ?>"><br><br>

    <button type="submit"><?= $editando ? 'Atualizar Livro' : 'Cadastrar Livro' ?></button>
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
            <td><?= $livro->getTitulo(); ?></td>
            <td><?= $livro->getAutor(); ?></td>
            <td><?= $livro->getAno(); ?></td>
            <td><?= $livro->getGenero(); ?></td>
            <td><?= $livro->getQuantidade(); ?></td>

            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">
                    <button type="submit">Editar</button>
                </form>

                <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
