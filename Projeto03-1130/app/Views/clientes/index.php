<?= $this->extend('layouts/default'); ?>
<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?>Clientes<?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item active">Clientes</li>
<a href="/inicio" style="margin-left: 15px;" class="btn btn-info"><i class="fas fa-arrow-left"></i> Voltar</a>

<?= $this->endSection(); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <?php
        $session = session();
        $alert = $session->get('alert');
        ?>


        <?php if (isset($alert)) : ?>
            <?php if ($alert == 'success_create') : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Cliente cadastrado com sucesso!</h5>
                        </div>
                    </div>
                </div>

            <?php elseif ($alert == 'success_delete') : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Cliente excluído com sucesso!</h5>
                        </div>
                    </div>
                </div>

            <?php elseif ($alert == 'success_update') : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Cliente atualizado com sucesso!</h5>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        <?php endif; ?>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h3 class="card-title">Registros</h3> -->
                        <a href="/clientes/novo" class="btn btn-primary"><i class="fas fa-user-plus"></i> Novo
                            Cliente</a>
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

                                <?php if (isset($clientes)) : ?>
                                    <?php foreach ($clientes as $cliente) : ?>
                                        <tr>
                                            <td> <?= $cliente['id_cliente'] ?></td>
                                            <td> <?= $cliente['nome'] ?></td>
                                            <td> <?= $cliente['data_de_nascimento'] ?></td>
                                            <td> <?= $cliente['telefone'] ?></td>
                                            <td> <?= $cliente['endereco'] ?></td>
                                            <td> <?= $cliente['limite_de_credito'] ?></td>

                                            <td style="text-align: center;">
                                                <a href="/clientes/exibir/<?= $cliente['id_cliente'] ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="/clientes/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger" onclick="document.getElementById('id_cliente').value = '<?= $cliente['id_cliente'] ?>'" data-toggle="modal" data-target="#modal-confirmDelete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7">Nenhum cliente cadastrado</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div> -->
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

<?= $this->endSection(); ?>