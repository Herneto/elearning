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
                    <h2>Novo Curso</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="<?= base_url() ?>welcome/addCursoPost">
                                <div class="form-group">
                                    <label for="titulo">Titulo:</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                                <div class="form-group">
                                    <label for="descricao">Descrição:</label>
                                    <textarea class="form-control" id="descricao" name="descricao"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="preco">Preço:</label>
                                    <select class="form-control" name="preco">
                                        <option value="1000">1000 Kz</option>
                                        <option value="2000">2000 Kz</option>
                                        <option value="3000">3000 Kz</option>
                                        <option value="5000">5000 Kz</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Criar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>