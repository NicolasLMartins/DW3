<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                        <a href="/clientes" style="margin-left: 15px;" class="btn btn-info">Voltar</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Registros</h3> -->
                            <a href="/clientes/novo" class="btn btn-primary">Novo Cliente</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th style="width: 10px">Código</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Limite de Crédito</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clientes as $cliente): ?>
                                    <tr>
                                        <td> <?= $cliente['id_cliente'] ?></td>
                                        <td> <?= $cliente['nome'] ?></td>
                                        <td> <?= $cliente['data_de_nascimento'] ?></td>
                                        <td> <?= $cliente['telefone'] ?></td>
                                        <td> <?= $cliente['endereco'] ?></td>
                                        <td> <?= $cliente['limite_de_credito'] ?></td>

                                        <td style="text-align: center;">
                                            <a href="/clientes/exibir/<?= $cliente['id_cliente'] ?>"
                                                class="btn btn-info">Exibir</a>
                                            <a href="/clientes/editar/<?= $cliente['id_cliente'] ?>"
                                                class="btn btn-warning">Editar</a>
                                            <button type="button" class="btn btn-danger"
                                                onclick="document.getElementById('id_cliente').value = '<?= $cliente['id_cliente'] ?>'"
                                                data-toggle="modal" data-target="#modal-confirmDelete">Excluir</button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <div class="modal fade" id="modal-confirmDelete" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/clientes/excluir" method="post">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">Confirme a ação</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Deseja realmente excluir esse cliente?</p>

                            <input type="hidden" name="id_cliente" id="id_cliente" value="">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->

        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->