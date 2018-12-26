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
                    <a href="<?= base_url() ?>curso/meusCursos" class="btn btn-primary">Voltar a Meus cursos</a>
                    <h2>Aulas de Angular</h2>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Aula</th>
                                <th>Disponivel</th>
                                <?php if ($this->session->userdata('logado') && $this->session->userdata('nivel') != 2) { ?>
                                    <th>Opções</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?= base_url() ?>welcome/aula">Introdução</a></td>
                                <td>Sim</td>
                                <?php if ($this->session->userdata('logado') && $this->session->userdata('nivel') != 2) { ?>
                                    <td>
                                        <a class="btn btn-info" href="<?= base_url() ?>welcome/editarAula">Editar</a>
                                        <a class="btn btn-danger" href="">Eliminar</a>

                                    </td>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form Login -->

        </div>

    </body>
</html>