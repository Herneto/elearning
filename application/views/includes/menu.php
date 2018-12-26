<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url() ?>welcome/">Facil</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?= base_url() ?>welcome/">Home</a></li>
            <li><a href="<?= base_url() ?>curso/cursos">Cursos</a></li>
            <?php if ($this->session->userdata('logado')) { ?>
                <li><a href="<?= base_url() ?>curso/direto">Ir direito</a></li>
            <?php } ?>
        </ul>

        <?php if ($this->session->userdata('logado')) { ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?= $this->session->userdata('login') ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url() ?>curso/meusCursos"> Meus cursos</a></li>
                        <li><a href="<?= base_url() ?>welcome/perfil/<?= $this->session->userdata('id_usuario') ?>"> Perfil</a></li>
                        <li><a href="<?= base_url() ?>welcome/sair"> Sair</a></li>
                    </ul>
                </li>
            </ul>
        <?php } else { ?>
            <form class="form-inline nav navbar-nav navbar-right" role="form" 
                  action="<?= base_url() ?>welcome/loginPost" method="post">
                <div class="form-group">
                    <label for="login">Usuario:</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>
        <?php } ?> 
    </div>
</nav>
