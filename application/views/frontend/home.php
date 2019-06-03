<h1>Bem vindo à Superlógica Imobiliárias</h1>
<h2>Faça Login</h2>
<div class="col-lg-6">
    <p>Dados do banco local MySQL</p>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }
    if($this->session->has_userdata('nome')){
    ?>
    <span class="navbar-text mr-5">
        <?php echo $this->session->userdata('nome'); ?>
        <br>
        <a href="<?php echo base_url()?>logout/"><button class="btn btn-warning">Sair</button></a>
    </span>
    <?php
    }else{
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="inputUser">Usuario</label>
            <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Digite o usuário" autofocus required>
        </div>
        <div class="form-group">
            <label for="inputSenha">Senha</label>
            <input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Senha" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <br>
        <a href="<?php echo base_url()?>cadastro/">Cadastre-se</a>
    </form>
    <?php
    }
    ?>
</div>
