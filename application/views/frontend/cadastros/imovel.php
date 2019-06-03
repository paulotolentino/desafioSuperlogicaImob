<h1>Cadastro</h1>
<h2>Insira os dados do imóvel</h2>
<div class="col-lg-12">
    <p>Dados serão salvos na API</p>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }
    ?>

    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_TIPO_IMO">Tipo</label>
                <select class="form-control" name="ST_TIPO_IMO" id="ST_TIPO_IMO">
                    <option value="1">Casa</option>
                    <option value="2">Casa em condomínio</option>
                    <option value="3">Casa comercial</option>
                    <option value="4">Apartamento</option>
                    <option value="5">Cobertura</option>
                    <option value="6">Flat</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CEP_IMO">CEP</label>
                <input type="text" name="ST_CEP_IMO" id="ST_CEP_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ENDERECO_IMO">Endereço</label>
                <input type="text" name="ST_ENDERECO_IMO" id="ST_ENDERECO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NUMERO_IMO">Número</label>
                <input type="text" name="ST_NUMERO_IMO" id="ST_NUMERO_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_COMPLEMENTO_IMO">Complemento</label>
                <input type="text" name="ST_COMPLEMENTO_IMO" id="ST_COMPLEMENTO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_BAIRRO_IMO">Bairro</label>
                <input type="text" name="ST_BAIRRO_IMO" id="ST_BAIRRO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CIDADE_IMO">Cidade</label>
                <input type="text" name="ST_CIDADE_IMO" id="ST_CIDADE_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ESTADO_IMO">Estado</label>
                <input type="text" name="ST_ESTADO_IMO" id="ST_ESTADO_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="country">Proprietário</label>
                <select class="form-control" name="PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES">
                    <option enabled></option>
                    <?php 
                    foreach($proprietarios->data as $proprietario){
                    ?>
                        <option class="proprietario" value="<?php echo $proprietario->id_pessoa_pes; ?>"><?php echo $proprietario->st_nome_pes; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_IDENTIFICADOR_IMO">Identificador externo</label>
                <input type="text" name="ST_IDENTIFICADOR_IMO" id="ST_IDENTIFICADOR_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="VL_ALUGUEL_IMO">Valor do aluguel</label>
                <input type="text" name="VL_ALUGUEL_IMO" id="VL_ALUGUEL_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="VL_VENDA_IMO">Valor de venda</label>
                <input type="text" name="VL_VENDA_IMO" id="VL_VENDA_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="TX_ADM_IMO">Taxa de administração mensal (%)</label>
                <input type="text" name="TX_ADM_IMO" id="TX_ADM_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="FL_TXADMVALORFIXO_IMO">Taxa de Administração valor fixo?</label>
                <select class="form-control" name="FL_TXADMVALORFIXO_IMO" id="FL_TXADMVALORFIXO_IMO">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>