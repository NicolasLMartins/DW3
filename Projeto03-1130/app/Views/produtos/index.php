<?= $this->extend('layouts/default'); ?>

<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?>Produtos<?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item active">Produtos</li>
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
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Produto cadastrado com sucesso!</h5>
                        </div>
                    </div>
                </div>

            <?php elseif ($alert == 'success_delete') : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Produto excluído com sucesso!</h5>
                        </div>
                    </div>
                </div>

            <?php elseif ($alert == 'success_update') : ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="m-0"><i class="icon fas fa-check"></i>Produto atualizado com sucesso!</h5>
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
                        <a href="/produtos/novo" class="btn btn-primary"><i class="fas fa-user-plus"></i> Novo Produto</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th style="width: 10px">Código</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Quantidade</th>
                                    <th>Quantidade Mínima</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (!empty($produtos)) : ?>
                                    <?php foreach ($produtos as $produto) : ?>
                                        <tr>
                                            <td><?= $produto['id_produto'] ?></td>
                                            <td><?= $produto['nome'] ?></td>
                                            <td><?= $produto['descricao'] ?></td>
                                            <td><?= $produto['quantidade'] ?></td>
                                            <td><?= $produto['quantidade_minima'] ?></td>

                                            <td style="text-align: center;">
                                                <a href="/produtos/exibir/<?= $produto['id_produto'] ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="/produtos/editar/<?= $produto['id_produto'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger" onclick="document.getElementById('id_produto').value = '<?= $produto['id_produto'] ?>'" data-toggle="modal" data-target="#modal-confirmDelete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7">Nenhum produto cadastrado</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
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
                <form action="/produtos/excluir" method="post">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">Confirme a ação</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esse produto?</p>

                        <input type="hidden" name="id_produto" id="id_produto" value="">
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