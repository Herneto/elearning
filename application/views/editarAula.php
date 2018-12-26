<html>
    <head>
        <meta charset="UTF-8">
        <title>Cursos</title>
        <link rel="stylesheet" href="<?= base_url() ?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url() ?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- First Container -->
        <div class="container">
            <!-- Conteudo -->
            <div class="row">
                <div class="col-sm-10">

                    <!-- Modal content-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Editar aula</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="sel1">Visivel?</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="sel1">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="titulo">Titulo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="titulo" placeholder="insere o tema">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="comment">Conteudo</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="20" id="comment"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Form Login -->
            </div>
        </div>
    </body>
</html>