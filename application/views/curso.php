<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalhes curso</title>
        <link rel="stylesheet" href="<?= base_url() ?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url() ?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- First Container -->
        <div class="container">
            <!-- Conteudo -->
            <div class="row">

                <div class="col-sm-3 sidenav">
                    <p>OUTROS CURSOS:</p>
                    <?php foreach ($cursos as $c) { ?>
                        <p><a href="<?= base_url() ?>curso/ver/<?= $c->id_curso ?>">
                                <?= $c->titulo ?></a></p>
                    <?php } ?>
                </div>

                <div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title"><?= $curso[0]->titulo ?></div>
                        </div>
                        <div class="panel-body">
                            <p><?= $curso[0]->descricao ?></p>
                            <p class="h3">Instrutor: <?= $curso[0]->nomes . ' ' . $curso[0]->apelidos ?></p>
                            <p class="h3">Preço: <?= $curso[0]->preco ?></p>
                        </div>
                        <div class="panel-footer">
                            <!-- Verificar se já esta inscrito -->
                            <?php if ($this->session->userdata('logado')) { ?>
                                <?php if (!$inscrito) { ?>
                                    <a href="<?= base_url() ?>curso/inscrever/<?= $curso[0]->id_curso ?>" 
                                       class="btn btn-primary">Me inscrever</a>
                                <?php } else { ?>
                                    <p>Já inscrito, <a href="#">Ver aulas</a></p>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Login -->
        </div>
    </body>
</html>