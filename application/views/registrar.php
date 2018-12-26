<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="<?= base_url() ?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url() ?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- First Container -->
        <div class="container-fluid bg-1">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h1>Facil</h1>
                <h3>Fazer registro</h3>
                <form role="form" method="POST" action="<?= base_url() ?>welcome/cadastroPost">
                    <div class="form-group">
                        <label for="sel1">Categoria:</label>
                        <select class="form-control" name="nivel">
                            <option value="2">Estudante</option>
                            <option value="1">Instrutor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="apelido">Apelido:</label>
                        <input type="text" class="form-control" id="apelido" name="apelido">
                    </div>
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <div class="checkbox">
                        <a href="<?= base_url() ?>">Fazer Login</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>