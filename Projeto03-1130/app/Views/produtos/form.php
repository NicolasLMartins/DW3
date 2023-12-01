<?= $this->extend('layouts/default'); ?>
<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?><?= (isset($produto)) ? "Atualizar Dados" : "Novo Produto" ?><?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
<li class="breadcrumb-item active"><?= (isset($produto)) ? "Atualizar" : "Novo" ?></li>
<a href="/produtos" style="margin-left: 15px;" class="btn btn-info"><i class="fas fa-arrow-left"></i> Voltar</a>

<?= $this->endSection(); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- .card -->
                <div class="<?= (isset($produto)) ? "card card-warning" : "card card-primary" ?>">
                    <!-- .card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Dados Pessoais</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="/produtos/store" method="post">
                        <!-- .card-body -->
                        <div class="card-body">
                            <!-- É Bootstrap! -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?= (isset($produto)) ? $produto['nome'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Descrição</label>
                                        <input type="text" class="form-control" name="descricao" value="<?= (isset($produto)) ? $produto['descricao'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Quantidade</label>
                                        <input type="text" class="form-control" name="quantidade" value="<?= (isset($produto)) ? $produto['quantidade'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Quantidade Mínima</label>
                                        <input type="text" class="form-control" name="quantidade_minima" value="<?= (isset($produto)) ? $produto['quantidade_minima'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Valor de Compra</label>
                                        <input type="text" class="form-control" name="valor_de_compra" value="<?= (isset($produto)) ? $produto['valor_de_compra'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Valor de Venda</label>
                                        <input type="text" class="form-control" name="valor_de_venda" value="<?= (isset($produto)) ? $produto['valor_de_venda'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Margem de Lucro</label>
                                        <input type="text" class="form-control" name="margem_de_lucro" value="<?= (isset($produto)) ? $produto['margem_de_lucro'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Validade</label>
                                        <input type="date" class="form-control" name="validade" value="<?= (isset($produto)) ? $produto['validade'] : "" ?>">
                                    </div>
                                </div>

                                <?php if (isset($produto)) : ?>
                                    <input type="hidden" name="id_produto" value="<?= $produto['id_produto'] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- .card-footer -->
                        <div class="card-footer">
                            <button type="submit" class="<?= (isset($produto)) ? "btn btn-warning" : "btn btn-primary" ?>"><i class="<?= (isset($produto)) ? "fas fa-edit" : "fas fa-save" ?>"></i>
                                <?= (isset($produto)) ? "Atualizar" : "Cadastrar" ?></button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->

<?= $this->endSection(); ?>