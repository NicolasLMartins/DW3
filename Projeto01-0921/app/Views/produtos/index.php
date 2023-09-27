<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $titulo ?></h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor de Compra</th>
                <th>Valor de Venda</th>
                <th>Quantidade</th>
                <th>Validade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['descricao'] ?></td>
                <td><?= $produto['valor_de_compra'] ?></td>
                <td><?= $produto['valor_de_venda'] ?></td>
                <td><?= $produto['quantidade'] ?></td>

                <?php if($produto['validade'] == ""): ?>
                <td>Produto sem validade!</td>
                <?php else: ?>
                <td><?= $produto['validade'] ?></td>
                <?php endif; ?>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>