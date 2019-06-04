<h1>Cadastro</h1>
<h2>Insira os dados do locatário</h2>
<div class="col-lg-12">
    <p>Dados serão salvos na API</p>
    <h3 id="aviso" style="color:red">Todos os dados são obrigatórios</h3>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }
    ?>

    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_NOME_PES">Nome</label>
                <input required type="text" name="ST_NOME_PES" id="ST_NOME_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_FANTASIA_PES">Nome fantasia</label>
                <input required type="text" name="ST_FANTASIA_PES" id="ST_FANTASIA_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CNPJ_PES">CPF / CNPJ</label>
                <input required type="text" name="ST_CNPJ_PES" id="ST_CNPJ_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CELULAR_PES">Celular</label>
                <input required type="text" name="ST_CELULAR_PES" id="ST_CELULAR_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_TELEFONE_PES">Telefone</label>
                <input required type="text" name="ST_TELEFONE_PES" id="ST_TELEFONE_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_EMAIL_PES">Email</label>
                <input required type="email" name="ST_EMAIL_PES" id="ST_EMAIL_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_RG_PES">RG</label>
                <input required type="text" name="ST_RG_PES" id="ST_RG_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ORGÃO_PES">Orgão expeditor</label>
                <input required type="text" name="ST_ORGÃO_PES" id="ST_ORGÃO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">                
                <label for="ST_SEXO_PES">Sexo</label>
                <select required class="form-control" name="ST_SEXO_PES" id="ST_SEXO_PES">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="DT_NASCIMENTO_PES">Data de nascimento</label>
                <input required type="text" name="DT_NASCIMENTO_PES" id="DT_NASCIMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NACIONALIDADE_PES">Nacionalidade</label>
                <select required class="form-control" name="ST_NACIONALIDADE_PES" id="ST_NACIONALIDADE_PES">
                    <option value="1">Brasil</option>
                    <option value="2">Outro</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CEP_PES">CEP</label>
                <input required type="text" name="ST_CEP_PES" id="ST_CEP_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_ENDERECO_PES">Endereço</label>
                <input required type="text" name="ST_ENDERECO_PES" id="ST_ENDERECO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NUMERO_PES">Número</label>
                <input required type="text" name="ST_NUMERO_PES" id="ST_NUMERO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_COMPLEMENTO_PES">Complemento</label>
                <input required type="text" name="ST_COMPLEMENTO_PES" id="ST_COMPLEMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_BAIRRO_PES">Bairro</label>
                <input required type="text" name="ST_BAIRRO_PES" id="ST_BAIRRO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_CIDADE_PES">Cidade</label>
                <input required type="text" name="ST_CIDADE_PES" id="ST_CIDADE_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ESTADO_PES">Estado</label>
                <input required type="text" name="ST_ESTADO_PES" id="ST_ESTADO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_OBSERVACAO_PES">Observação</label>
                <input required type="text" name="ST_OBSERVACAO_PES" id="ST_OBSERVACAO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ID_FORMA_PAG">Forma de Pagamento</label>
                <select required class="form-control" name="ID_FORMA_PAG" id="ID_FORMA_PAG">
                    <option value="1">Depósito em cheque</option>
                    <option value="2">Depósito em dinheiro</option>
                    <option value="3">Retirar cheque no local</option>
                    <option value="4">Retirar dinheiro no local</option>
                    <option value="5">Transf.bancária</option>
                    <option value="6">Doc/Ted</option>
                </select>
            </div>            
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="FL_NAODOMICILIADO_PES">Mora no Brasil?</label>
                <select required class="form-control" name="FL_NAODOMICILIADO_PES" id="FL_NAODOMICILIADO_PES">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>