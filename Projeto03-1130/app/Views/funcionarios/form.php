<?= $this->extend('layouts/default'); ?>
<?= $this->section('conteudo'); ?>

<?= $this->section('pageHeaderTitle'); ?><?= (isset($funcionario)) ? "Atualizar Dados" : "Novo Funcionário" ?><?= $this->endSection(); ?>
<?= $this->section('breadcrumb'); ?>

<li class="breadcrumb-item"><a href="/inicio">Início</a></li>
<li class="breadcrumb-item"><a href="/funcionarios">Funcionários</a></li>
<li class="breadcrumb-item active"><?= (isset($funcionario)) ? "Atualizar" : "Novo" ?></li>
<a href="/funcionarios" style="margin-left: 15px;" class="btn btn-info"><i class="fas fa-arrow-left"></i> Voltar</a>

<?= $this->endSection(); ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- .card -->
                <div class="<?= (isset($funcionario)) ? "card card-warning" : "card card-primary" ?>">
                    <!-- .card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Dados Pessoais</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="/funcionarios/store" method="post">
                        <!-- .card-body -->
                        <div class="card-body">
                            <!-- É Bootstrap! -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?= (isset($funcionario)) ? $funcionario['nome'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="data_de_nascimento" value="<?= (isset($funcionario)) ? $funcionario['data_de_nascimento'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">RG</label>
                                        <input type="text" class="form-control" name="rg" value="<?= (isset($funcionario)) ? $funcionario['rg'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">CPF</label>
                                        <input type="text" class="form-control" name="cpf" value="<?= (isset($funcionario)) ? $funcionario['cpf'] : "" ?>">

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Telefone</label>
                                        <input type="text" class="form-control" name="telefone" value="<?= (isset($funcionario)) ? $funcionario['telefone'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="<?= (isset($funcionario)) ? $funcionario['endereco'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de Contratação</label>
                                        <input type="date" class="form-control" name="data_de_contratacao" value="<?= (isset($funcionario)) ? $funcionario['data_de_contratacao'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" value="<?= (isset($funcionario)) ? $funcionario['cargo'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Salário</label>
                                        <input type="text" class="form-control" name="salario" value="<?= (isset($funcionario)) ? $funcionario['salario'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dia de Pagamento</label>
                                        <input type="text" class="form-control" name="dia_de_pagamento" value="<?= (isset($funcionario)) ? $funcionario['dia_de_pagamento'] : "" ?>">
                                    </div>
                                </div>

                                <?php if (isset($funcionario)) : ?>
                                    <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- .card-footer -->
                        <div class="card-footer">
                            <button type="submit" class="<?= (isset($funcionario)) ? "btn btn-warning" : "btn btn-primary" ?>"><i class="<?= (isset($funcionario)) ? "fas fa-edit" : "fas fa-save" ?>"></i>
                                <?= (isset($funcionario)) ? "Atualizar" : "Cadastrar" ?></button>
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