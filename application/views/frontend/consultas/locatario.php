<h1>Consulta</h1>
<h2>Dados do locatário</h2>
<div class="col-lg-12">
    <p>Dados estão salvos na API</p>
    <h3 id="aviso" style="display: none; color:red">Todos os dados são obrigatórios</h3>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }else if(isset($locatario) && $locatario != null){
    ?>
    <form action="<?php echo base_url(); ?>editar/locatario/<?php echo $locatario->data[0]->id_pessoa_pes; ?>/" method="POST">
        <div class="form-row">
            <input disabled type="hidden" name="ID_PESSOA_PES" value="<?php echo $locatario->data[0]->id_pessoa_pes; ?>">
            <div class="form-group col-md-3">
                <label for="ST_NOME_PES">Nome</label>
                <input disabled required type="text" name="ST_NOME_PES" value="<?php echo $locatario->data[0]->st_nome_pes; ?>" id="ST_NOME_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_FANTASIA_PES">Nome fantasia</label>
                <input disabled required type="text" name="ST_FANTASIA_PES" value="<?php echo $locatario->data[0]->st_fantasia_pes; ?>" id="ST_FANTASIA_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CNPJ_PES">CPF / CNPJ</label>
                <input disabled required type="text" name="ST_CNPJ_PES" value="<?php echo $locatario->data[0]->st_cnpj_pes; ?>" id="ST_CNPJ_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CELULAR_PES">Celular</label>
                <input disabled required type="text" name="ST_CELULAR_PES" value="<?php echo $locatario->data[0]->st_celular_pes; ?>" id="ST_CELULAR_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_TELEFONE_PES">Telefone</label>
                <input disabled required type="text" name="ST_TELEFONE_PES" value="<?php echo $locatario->data[0]->st_telefone_pes; ?>" id="ST_TELEFONE_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_EMAIL_PES">Email</label>
                <input disabled required type="email" name="ST_EMAIL_PES" value="<?php echo $locatario->data[0]->st_email_pes; ?>" id="ST_EMAIL_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_RG_PES">RG</label>
                <input disabled required type="text" name="ST_RG_PES" value="<?php echo $locatario->data[0]->st_rg_pes; ?>" id="ST_RG_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ORGAO_PES">Orgão expeditor</label>
                <input disabled required type="text" name="ST_ORGAO_PES" value="<?php echo $locatario->data[0]->st_orgao_pes; ?>" id="ST_ORGÃO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">                
                <label for="ST_SEXO_PES">Sexo</label>
                <select disabled required class="form-control" name="ST_SEXO_PES" id="ST_SEXO_PES">
                    <option value="1" <?php if($locatario->data[0]->st_sexo_pes == 1) echo "selected";?>>Masculino</option>
                    <option value="2" <?php if($locatario->data[0]->st_sexo_pes == 2) echo "selected";?>>Feminino</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="DT_NASCIMENTO_PES">Data de nascimento</label>
                <input disabled required type="text" name="DT_NASCIMENTO_PES" value="<?php echo $locatario->data[0]->dt_nascimento_pes; ?>" id="DT_NASCIMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NACIONALIDADE_PES">Nacionalidade</label>
                <select disabled required class="form-control" name="ST_NACIONALIDADE_PES" id="ST_NACIONALIDADE_PES">
                    <option value="1" <?php if($locatario->data[0]->st_nacionalidade_pes == 1) echo "selected";?>>Brasil</option>
                    <option value="2" <?php if($locatario->data[0]->st_nacionalidade_pes == 2) echo "selected";?>>Outro</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CEP_PES">CEP</label>
                <input disabled required type="text" name="ST_CEP_PES" value="<?php echo $locatario->data[0]->st_cep_pes; ?>" id="ST_CEP_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_ENDERECO_PES">Endereço</label>
                <input disabled required type="text" name="ST_ENDERECO_PES" value="<?php echo $locatario->data[0]->st_endereco_pes; ?>" id="ST_ENDERECO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NUMERO_PES">Número</label>
                <input disabled required type="text" name="ST_NUMERO_PES" value="<?php echo $locatario->data[0]->st_numero_pes; ?>" id="ST_NUMERO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_COMPLEMENTO_PES">Complemento</label>
                <input disabled required type="text" name="ST_COMPLEMENTO_PES" value="<?php echo $locatario->data[0]->st_complemento_pes; ?>" id="ST_COMPLEMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_BAIRRO_PES">Bairro</label>
                <input disabled required type="text" name="ST_BAIRRO_PES" value="<?php echo $locatario->data[0]->st_bairro_pes; ?>" id="ST_BAIRRO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_CIDADE_PES">Cidade</label>
                <input disabled required type="text" name="ST_CIDADE_PES" value="<?php echo $locatario->data[0]->st_cidade_pes; ?>" id="ST_CIDADE_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ESTADO_PES">Estado</label>
                <input disabled required type="text" name="ST_ESTADO_PES" value="<?php echo $locatario->data[0]->st_estado_pes; ?>" id="ST_ESTADO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_OBSERVACAO_PES">Observação</label>
                <input disabled required type="text" name="ST_OBSERVACAO_PES" value="<?php echo $locatario->data[0]->st_observacao_pes; ?>" id="ST_OBSERVACAO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ID_FORMA_PAG">Forma de Pagamento</label>
                <select disabled required class="form-control" name="ID_FORMA_PAG" id="ID_FORMA_PAG">
                    <option value="1" <?php if($locatario->data[0]->id_forma_pag == 1) echo "selected";?>>Depósito em cheque</option>
                    <option value="2" <?php if($locatario->data[0]->id_forma_pag == 2) echo "selected";?>>Depósito em dinheiro</option>
                    <option value="3" <?php if($locatario->data[0]->id_forma_pag == 3) echo "selected";?>>Retirar cheque no local</option>
                    <option value="4" <?php if($locatario->data[0]->id_forma_pag == 4) echo "selected";?>>Retirar dinheiro no local</option>
                    <option value="5" <?php if($locatario->data[0]->id_forma_pag == 5) echo "selected";?>>Transf.bancária</option>
                    <option value="6" <?php if($locatario->data[0]->id_forma_pag == 6) echo "selected";?>>Doc/Ted</option>
                </select>
            </div>            
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="FL_NAODOMICILIADO_PES">Mora no Brasil?</label>
                <select disabled required class="form-control" name="FL_NAODOMICILIADO_PES" id="FL_NAODOMICILIADO_PES">
                    <option value="1" <?php if($locatario->data[0]->fl_naodomiciliado_pes == 1) echo "selected";?>>Sim</option>
                    <option value="0" <?php if($locatario->data[0]->fl_naodomiciliado_pes == 0) echo "selected";?>>Não</option>
                </select>
            </div>
        </div>

        <button type="button" id="habilitar" class="btn btn-primary" onclick="habilitarCampos()">Habilitar edição</button>
        <button type="submit" id="salvar" class="btn btn-success" disabled >Salvar</button>
    </form>
    <?php
    }else{
        echo '<div class="p-3 mb-2 bg-danger text-white">Dados inválidos</div>';
    }
    ?>
</div>