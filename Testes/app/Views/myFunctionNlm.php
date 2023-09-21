<!DOCTYPE html>
<html>

<style>
    table, th, td{
        border: 2px solid black;
    }

    table{
        text-align: -internal-left;
    }
</style>

<body>

<h2><? echo $titulo ?></h2>

<table style="width:50%">
    <tr>
        <th>Dia</th>
        <th>Descrição</th>
        <th>Ativa</th>
    </tr>

    <tbody>
        <?php foreach ($diasDaSemana as $dia): ?>
            <tr>
                <td><?php echo $dia->dia; ?></td>
                <td><?php echo $dia->descricao; ?></td>
                <td><?php echo $dia->ativa == true ? 'Sim' : 'Não'; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>