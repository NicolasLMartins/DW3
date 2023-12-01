<?= $this->extend('layouts/default'); ?>
<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?>Dados do Produto<?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
<li class="breadcrumb-item active">Dados do Produto</li>
<a href="/produtos" style="margin-left: 15px;" class="btn btn-info"><i class="fas fa-arrow-left"></i> Voltar</a>

<?= $this->endSection(); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- .card -->
                <div class="card card-info">
                    <!-- .card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Dados do Produto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- Bootstrap -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" value="<?= $produto['nome'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <input type="text" class="form-control" value="<?= $produto['descricao'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Quantidade</label>
                                    <input type="text" class="form-control" value="<?= $produto['quantidade'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Quantidade Mínima</label>
                                    <input type="text" class="form-control" value="<?= $produto['quantidade_minima'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Valor de Compra</label>
                                    <input type="text" class="form-control" value="<?= $produto['valor_de_compra'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Valor de Venda</label>
                                    <input type="text" class="form-control" value="<?= $produto['valor_de_venda'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Margem de Lucro</label>
                                    <input type="text" class="form-control" value="<?= $produto['margem_de_lucro'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Validade</label>
                                    <input type="date" class="form-control" value="<?= $produto['validade'] ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
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