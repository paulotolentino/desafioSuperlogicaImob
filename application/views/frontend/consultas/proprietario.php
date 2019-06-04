<h1>Consulta</h1>
<h2>Dados do proprietário</h2>
<div class="col-lg-12">
    <p>Dados estão salvos na API</p>
    <h3 id="aviso" style="display: none; color:red">Todos os dados são obrigatórios</h3>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }else if(isset($proprietario) && $proprietario != null){
    ?>
    <form action="<?php echo base_url(); ?>editar/proprietario/<?php echo $proprietario->data[0]->id_pessoa_pes; ?>/" method="POST">
        <div class="form-row">
            <input type="hidden" name="ID_PESSOA_PES" value="<?php echo $proprietario->data[0]->id_pessoa_pes; ?>">
            <div class="form-group col-md-3">
                <label for="ST_NOME_PES">Nome</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_nome_pes; ?>" type="text" name="ST_NOME_PES" id="ST_NOME_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_FANTASIA_PES">Nome Fantasia</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_fantasia_pes; ?>" type="text" name="ST_FANTASIA_PES" id="ST_FANTASIA_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CNPJ_PES">CPF / CNPJ</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_cnpj_pes; ?>" type="text" name="ST_CNPJ_PES" id="ST_CNPJ_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CELULAR_PES">Celular</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_celular_pes; ?>" type="text" name="ST_CELULAR_PES" id="ST_CELULAR_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_TELEFONE_PES">Telefone</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_telefone_pes; ?>" type="text" name="ST_TELEFONE_PES" id="ST_TELEFONE_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_EMAIL_PES">Email</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_email_pes; ?>" type="email" name="ST_EMAIL_PES" id="ST_EMAIL_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_RG_PES">RG</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_rg_pes; ?>" type="text" name="ST_RG_PES" id="ST_RG_PES" class="form-control" placeholder="Somente números">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ORGAO_PES">Orgão expeditor</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_orgao_pes; ?>" type="text" name="ST_ORGAO_PES" id="ST_ORGAO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">                
                <label for="ST_SEXO_PES">Sexo</label>
                <select disabled class="form-control" name="ST_SEXO_PES" id="ST_SEXO_PES">
                    <option value="1" <?php if($proprietario->data[0]->st_sexo_pes == 1) echo "selected";?>>Masculino</option>
                    <option value="2" <?php if($proprietario->data[0]->st_sexo_pes == 2) echo "selected";?>>Feminino</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="DT_NASCIMENTO_PES">Data de nascimento</label>
                <input disabled value="<?php echo $proprietario->data[0]->dt_nascimento_pes; ?>" type="text" name="DT_NASCIMENTO_PES" id="DT_NASCIMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NACIONALIDADE_PES">Nacionalidade</label>
                <select disabled class="form-control" name="ST_NACIONALIDADE_PES" id="ST_NACIONALIDADE_PES">
                    <option value="1" <?php if($proprietario->data[0]->st_nacionalidade_pes == 1) echo "selected";?>>Brasil</option>
                    <option value="2" <?php if($proprietario->data[0]->st_nacionalidade_pes == 2) echo "selected";?>>Outro</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CEP_PES">CEP</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_cep_pes; ?>" type="text" name="ST_CEP_PES" id="ST_CEP_PES" class="form-control" placeholder="Somente números">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_ENDERECO_PES">Endereço</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_endereco_pes; ?>" type="text" name="ST_ENDERECO_PES" id="ST_ENDERECO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NUMERO_PES">Número</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_numero_pes; ?>" type="text" name="ST_NUMERO_PES" id="ST_NUMERO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_COMPLEMENTO_PES">Complemento</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_complemento_pes; ?>" type="text" name="ST_COMPLEMENTO_PES" id="ST_COMPLEMENTO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_BAIRRO_PES">Bairro</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_bairro_pes; ?>" type="text" name="ST_BAIRRO_PES" id="ST_BAIRRO_PES" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_CIDADE_PES">Cidade</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_cidade_pes; ?>" type="text" name="ST_CIDADE_PES" id="ST_CIDADE_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ESTADO_PES">Estado</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_estado_pes; ?>" type="text" name="ST_ESTADO_PES" id="ST_ESTADO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_OBSERVACAO_PES">Observação</label>
                <input disabled value="<?php echo $proprietario->data[0]->st_observacao_pes; ?>" type="text" name="ST_OBSERVACAO_PES" id="ST_OBSERVACAO_PES" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="FL_RETERISSQN_PES">Reter ISSQN?</label>
                <select disabled class="form-control" name="FL_RETERISSQN_PES" id="FL_RETERISSQN_PES">
                    <option value="1" <?php if($proprietario->data[0]->fl_reterissqn_pes == 1) echo "selected";?>>Sim</option>
                    <option value="0" <?php if($proprietario->data[0]->fl_reterissqn_pes == 0) echo "selected";?>>Não</option>
                </select>
            </div>            
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="FL_NAODOMICILIADO_PES">Mora no Brasil?</label>
                <select disabled class="form-control" name="FL_NAODOMICILIADO_PES" id="FL_NAODOMICILIADO_PES">
                    <option value="1" <?php if($proprietario->data[0]->fl_naodomiciliado_pes == 1) echo "selected";?>>Sim</option>
                    <option value="0" <?php if($proprietario->data[0]->fl_naodomiciliado_pes == 0) echo "selected";?>>Não</option>
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