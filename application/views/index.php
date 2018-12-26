<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Facil</title>
        <link rel="stylesheet" href="<?= base_url() ?>/libs/css/bootstrap.min.css">
        <script src="<?= base_url() ?>/libs/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>/libs/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <!--Menu -->

            <!-- Conteudo -->
            <div class="row">

                <div class="col-sm-12">
                    <div class="jumbotron">
                        <h1>ELearning</h1>
                        <p>Aprenda, ensina de forma simples e muito <span class="label label-info">Facil</span></p>
                        <?php if (!$this->session->userdata('logado')) { ?>
                            <a href="<?= base_url() ?>welcome/cadastro" class="btn btn-default">Se Registrar</a>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <!-- Publicidade de cursos -->  
            <div class="row">
                <div class="col-sm-8"><h2>Ultimos cursos</h2></div>			
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">AngularJS</div>
                        <div class="panel-body">
                            <img src="" class="img-responsive" style="width:100%" alt="Image">
                            <p>Instrutor: <span class="stronge">Osvaldo Calombe</span></p>
                        </div>
                        <div class="panel-footer">
                            <a href="<?= base_url() ?>curso/ver/2">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
    </body>
</html>

