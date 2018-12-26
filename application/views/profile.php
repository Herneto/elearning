<html>
    <head>
        <meta charset="UTF-8">
        <title>Perfil</title>
        <link rel="stylesheet" href="<?= base_url()?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url()?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url()?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>

        <!-- First Container -->
        <div class="container-fluid bg-1">
            <div class="container">
                <div class="row clearfix">
                </div>
                <div class="col-md-1 column">
                </div>
                <div class="col-md-10 column">
                    <div class="panel panel-default">
                        <div class="panel-heading">Perfil de <?= $user[0]->nomes; ?></div>
                        <div class="panel-body">
                            <p>ID: <?= $user[0]->id_usuario; ?></p>
                            <p>Nome: <?= $user[0]->nomes; ?> <?= $user[0]->apelidos; ?></p>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



