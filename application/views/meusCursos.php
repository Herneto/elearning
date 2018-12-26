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
                    <h2>Meus cursos</h2>
                    <?php if ($this->session->userdata('logado') && $this->session->userdata('nivel') == 1) { ?>
                        <a href="<?= base_url() ?>curso/addCurso" class="btn btn-primary">Novo curso</a>
                        <?php } ?>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Disponivel</th>
                                    <th>Estado</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AngularJS</td>
                                    <td>Sim</td>
                                    <td>Em curso</td>
                                    <td>
                                        <a class="btn btn-default" href="<?= base_url() ?>welcome/aulas">Ver aulas</a>
                                        <?php if ($this->session->userdata('logado') && $this->session->userdata('nivel') == 1) { ?>
                                            <a class="btn btn-primary" href="aulasProf.html">Adicionar aula</a>
                                            <a class="btn btn-info" href="aulasProf.html">Editar</a>
                                            <a class="btn btn-danger" href="aulasProf.html">Eliminar</a>
                                        <?php } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form Login -->
        </div>
    </body>
</html>