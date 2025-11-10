<?php
require_once __DIR__ . '/../controller/BebidaController.php';

$controller = new BebidaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    } elseif ($_POST['acao'] === 'atualizar') {
        $controller->atualizar($_POST['nome'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'atualizar_nome') {
        $controller->atualizarNome($_POST['nome_antigo'], $_POST['nome_novo']);
    } elseif ($_POST['acao'] === 'atualizar_categoria_volume') {
        $controller->atualizarCategoriaVolume($_POST['nome'], $_POST['categoria'], $_POST['volume']);
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Bebidas</title>
    <style>
        form {
            margin: 20px 0;
        }
        input, select, button {
            padding: 8px;
            margin: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .form-atualizar {
            display: flex;
            gap: 5px;
            align-items: center;
        }
        .form-atualizar input {
            width: 100px;
            margin: 0;
        }
        .form-atualizar-nome {
            display: flex;
            gap: 5px;
            align-items: center;
        }
        .form-atualizar-nome input {
            width: 120px;
            margin: 0;
        }
        .form-atualizar-cat-vol {
            display: flex;
            gap: 5px;
            align-items: center;
        }
        .form-atualizar-cat-vol input,
        .form-atualizar-cat-vol select {
            width: 120px;
            margin: 0;
            padding: 5px;
        }
    </style>
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
    <table>
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
            <td><?= number_format($bebida->getValor(), 2, ',', '.') ?></td>
            <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
            <td>
                <form method="POST" style="display:inline; margin-bottom: 10px;">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                    <button type="submit" onclick="return confirm('Deseja realmente excluir esta bebida?')">Excluir</button>
                </form>
                
                <form method="POST" class="form-atualizar">
                    <input type="hidden" name="acao" value="atualizar">
                    <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                    <input type="number" step="0.01" name="valor" placeholder="Novo Valor" required>
                    <input type="number" name="qtde" placeholder="Nova Qtd" required>
                    <button type="submit">Atualizar Preço/Qtd</button>
                </form>

                <form method="POST" class="form-atualizar-nome">
                    <input type="hidden" name="acao" value="atualizar_nome">
                    <input type="hidden" name="nome_antigo" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                    <input type="text" name="nome_novo" placeholder="Novo nome" required>
                    <button type="submit">Atualizar Nome</button>
                </form>

                <form method="POST" class="form-atualizar-cat-vol">
                    <input type="hidden" name="acao" value="atualizar_categoria_volume">
                    <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                    <select name="categoria" required>
                        <option value="">Categoria</option>
                        <option value="Refrigerante" <?= $bebida->getCategoria() === 'Refrigerante' ? 'selected' : '' ?>>Refrigerante</option>
                        <option value="Cerveja" <?= $bebida->getCategoria() === 'Cerveja' ? 'selected' : '' ?>>Cerveja</option>
                        <option value="Vinho" <?= $bebida->getCategoria() === 'Vinho' ? 'selected' : '' ?>>Vinho</option>
                        <option value="Destilado" <?= $bebida->getCategoria() === 'Destilado' ? 'selected' : '' ?>>Destilado</option>
                        <option value="Água" <?= $bebida->getCategoria() === 'Água' ? 'selected' : '' ?>>Água</option>
                        <option value="Suco" <?= $bebida->getCategoria() === 'Suco' ? 'selected' : '' ?>>Suco</option>
                        <option value="Energético" <?= $bebida->getCategoria() === 'Energético' ? 'selected' : '' ?>>Energético</option>
                    </select>
                    <input type="text" name="volume" placeholder="Novo volume" value="<?= htmlspecialchars($bebida->getVolume()) ?>" required>
                    <button type="submit">Atualizar Cat/Vol</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>