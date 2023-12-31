<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dados do Cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/inicio">Início</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
                        <li class="breadcrumb-item active">Dados do Cliente</li>
                        <a href="/clientes" style="margin-left: 15px;" class="btn btn-info"><i
                                class="fas fa-arrow-left"></i> Voltar</a>
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
                                        <input type="text" class="form-control" name="nome"
                                            value="<?= $cliente['nome'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de Nascimento</label>
                                        <input type="date" class="form-control" name="data_de_nascimento"
                                            value="<?= $cliente['data_de_nascimento'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Telefone</label>
                                        <input type="text" class="form-control" name="telefone"
                                            value="<?= $cliente['telefone'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" class="form-control" name="endereco"
                                            value="<?= $cliente['endereco'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Limite de Crédito</label>
                                        <input type="text" class="form-control" name="limite_de_credito"
                                            value="<?= $cliente['limite_de_credito'] ?>" disabled>
                                    </div>
                                </div>

                                <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>" disabled>

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
</div>
<!-- /.content-wrapper -->