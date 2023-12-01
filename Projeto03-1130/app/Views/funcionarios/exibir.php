<?= $this->extend('layouts/default'); ?>
<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?>Dados do Funcionário<?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
<li class="breadcrumb-item active">Dados do Funcionário</li>
<a href="/funcionarios" style="margin-left: 15px;" class="btn btn-info"><i class="fas fa-arrow-left"></i> Voltar</a>

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
                        <h3 class="card-title">Dados Pessoais</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- Bootstrap -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['nome'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Data de Nascimento</label>
                                    <input type="date" class="form-control" value="<?= $funcionario['data_de_nascimento'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">RG</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['rg'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['cpf'] ?>" disabled>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['telefone'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['endereco'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Data de Contratação</label>
                                    <input type="date" class="form-control" value="<?= $funcionario['data_de_contratacao'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Cargo</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['cargo'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Salário</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['salario'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Dia de Pagamento</label>
                                    <input type="text" class="form-control" value="<?= $funcionario['dia_de_pagamento'] ?>" disabled>
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