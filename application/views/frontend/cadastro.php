<h1>Cadastro</h1>
<h2>Insira seus dados</h2>
<div class="col-lg-6">
    <p>Dados salvos localmente em banco MySQL</p>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }
    ?>

    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" name="cadastroNome" class="form-control" id="inputNome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLogin">Login</label>
                <input type="text" name="cadastroLogin" class="form-control" id="inputLogin" placeholder="Login">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" name="cadastroEmail" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Senha</label>
                <input type="password" name="cadastroSenha" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <br>
        <a href="<?php echo base_url()?>">Entrar</a>
    </form>
</div>