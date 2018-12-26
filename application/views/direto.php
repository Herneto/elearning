<html>
    <head>
        <meta charset="UTF-8">
        <title>Meus cursos</title>
        <link rel="stylesheet" href="<?= base_url() ?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url() ?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- First Container -->
        <div class="container">
            <!-- Conteudo -->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h2>Meus Cursos</h2>
                    <?php foreach ($cursos as $c) { ?>
                        <div class="well">
                            <h3 class="text-primary"><?= $c->titulo ?></h3>
                            <p>Ultima aula: Aula 2</p>
                            <a href="<?= base_url() ?>aula/ultima_aula/<?= $c->id_curso ?>" class="btn btn-info">
                                Proxima aula</a>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Form Login -->
        </div>
    </body>
</html>