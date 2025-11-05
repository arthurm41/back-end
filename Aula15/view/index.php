<?php
require_once __DIR__ . '/../controller/BebidaController.php';

$controller = new BebidaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Bebidas</title>
</head>
<body>
    <h1>Gerenciamento de Bebidas</h1>
    <hr>

    <form method="POST">
        <input type="hidden" name="acao" value="criar">
        <input type="text" name="nome" placeholder="Nome da bebida" required>
        <select name="categoria" required>
            <option value="">Categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="text" name="volume" placeholder="Volume (ex: 300ml)" required>
        <input type="number" step="0.01" name="valor" placeholder="Valor (R$)" required>
        <input type="number" name="qtde" placeholder="Quantidade" required>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de Bebidas</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Volume</th>
            <th>Valor (R$)</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $bebida): ?>
        <tr>
            <td><?= htmlspecialchars($bebida->getNome()) ?></td>
            <td><?= htmlspecialchars($bebida->getCategoria()) ?></td>
            <td><?= htmlspecialchars($bebida->getVolume()) ?></td>
            <td><?= htmlspecialchars($bebida->getValor()) ?></td>
            <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
