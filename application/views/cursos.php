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
                    <h2>Cursos da ELearning</h2>
                    <div class="panel-group">
                        <?php foreach ($cursos as $c) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading"><?= $c->titulo ?></div>
                                <div class="panel-body">
                                    <p>Instrutor: <span class="strong"><?= $c->nomes.' '.$c->apelidos ?></span></p>
                                    <p>Preço: <?= $c->preco ?></p>
                                </div>
                                <div class="panel-footer">
                                    <a href="<?= base_url() ?>curso/ver/<?= $c->id_curso ?>"
                                                             class="btn btn-info">Detalhes</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Form Login -->
        </div>
    </body>
</html>