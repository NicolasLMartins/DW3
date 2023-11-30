<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<?= $this->include('layouts/partials/head'); ?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper"><!-- Content Wrapper. Contains page content -->
        <?= $this->include('layouts/partials/navbar'); ?>
        <?= $this->include('layouts/partials/sidebar'); ?>

        <div class="content-wrapper">
            <?= $this->include('layouts/partials/contentHeader'); ?>
            <?= $this->renderSection('conteudo'); ?>
        </div>

    </div>

    <?= $this->include('layouts/partials/scripts'); ?>
</body>

</html>