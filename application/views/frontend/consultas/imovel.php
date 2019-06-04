<h1>Consulta</h1>
<h2>Dados do imovel</h2>
<div class="col-lg-12">
    <p>Dados estão salvos na API</p>
    <h3 id="aviso" style="display: none; color:red">Todos os dados são obrigatórios</h3>
    <?php
    if(isset($mensagem) && $mensagem != NULL) {
        echo $mensagem;
    }else if(isset($imovel) && $imovel != null){
    ?>
    <form action="<?php echo base_url(); ?>editar/imovel/<?php echo $imovel->data[0]->id_imovel_imo; ?>/" method="POST">
        <div class="form-row">
            <input disabled value="<?php echo $imovel->data[0]->id_imovel_imo; ?>" disabled type="hidden" name="ID_IMOVEL_IMO">
            <div class="form-group col-md-3">
                <label for="ST_TIPO_IMO">Tipo</label>
                <select disabled required class="form-control" name="ST_TIPO_IMO" id="ST_TIPO_IMO">
                    <option value="1" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 1) echo "selected";?>>Casa</option>
                    <option value="2" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 2) echo "selected";?>>Casa em condomínio</option>
                    <option value="3" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 3) echo "selected";?>>Casa comercial</option>
                    <option value="4" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 4) echo "selected";?>>Apartamento</option>
                    <option value="5" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 5) echo "selected";?>>Cobertura</option>
                    <option value="6" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 6) echo "selected";?>>Flat</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CEP_IMO">CEP</label>
                <input disabled value="<?php echo $imovel->data[0]->st_cep_imo; ?>" required type="text" name="ST_CEP_IMO" id="ST_CEP_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ENDERECO_IMO">Endereço</label>
                <input disabled value="<?php echo $imovel->data[0]->st_endereco_imo; ?>" required type="text" name="ST_ENDERECO_IMO" id="ST_ENDERECO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_NUMERO_IMO">Número</label>
                <input disabled value="<?php echo $imovel->data[0]->st_numero_imo; ?>" required type="text" name="ST_NUMERO_IMO" id="ST_NUMERO_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="ST_COMPLEMENTO_IMO">Complemento</label>
                <input disabled value="<?php echo $imovel->data[0]->st_complemento_imo; ?>" required type="text" name="ST_COMPLEMENTO_IMO" id="ST_COMPLEMENTO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_BAIRRO_IMO">Bairro</label>
                <input disabled value="<?php echo $imovel->data[0]->st_bairro_imo; ?>" required type="text" name="ST_BAIRRO_IMO" id="ST_BAIRRO_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_CIDADE_IMO">Cidade</label>
                <input disabled value="<?php echo $imovel->data[0]->st_cidade_imo; ?>" required type="text" name="ST_CIDADE_IMO" id="ST_CIDADE_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="ST_ESTADO_IMO">Estado</label>
                <input disabled value="<?php echo $imovel->data[0]->st_estado_imo; ?>" required type="text" name="ST_ESTADO_IMO" id="ST_ESTADO_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES">Proprietário</label>
                <select disabled  required class="form-control" name="PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES" id="PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES">
                    <?php 
                    foreach($proprietarios->data as $proprietario){
                    ?>
                        <option class="proprietario"
                        <?php
                        if($imovel->data[0]->proprietarios_beneficiarios[0]->id_pessoa_pes == $proprietario->id_pessoa_pes){
                            echo "selected";
                        }?>
                        value="<?php echo $proprietario->id_pessoa_pes; ?>">
                            <?php echo $proprietario->st_nome_pes; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="ST_IDENTIFICADOR_IMO">Identificador externo</label>
                <input disabled value="<?php echo $imovel->data[0]->st_identificador_imo; ?>" required type="text" name="ST_IDENTIFICADOR_IMO" id="ST_IDENTIFICADOR_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="VL_ALUGUEL_IMO">Valor do aluguel</label>
                <input disabled value="<?php echo $imovel->data[0]->vl_aluguel_imo; ?>" required type="text" name="VL_ALUGUEL_IMO" id="VL_ALUGUEL_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="VL_VENDA_IMO">Valor de venda</label>
                <input disabled value="<?php echo $imovel->data[0]->vl_venda_imo; ?>" required type="text" name="VL_VENDA_IMO" id="VL_VENDA_IMO" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="TX_ADM_IMO">Taxa de administração mensal (%)</label>
                <input disabled value="<?php echo $imovel->data[0]->tx_adm_imo; ?>" required type="text" name="TX_ADM_IMO" id="TX_ADM_IMO" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="FL_TXADMVALORFIXO_IMO">Taxa de Administração valor fixo?</label>
                <select disabled required class="form-control" name="FL_TXADMVALORFIXO_IMO" id="FL_TXADMVALORFIXO_IMO">
                    <option value="1" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 1) echo "selected";?>>Sim</option>
                    <option value="0" <?php if($imovel->data[0]->fl_txadmvalorfixo_imo == 0) echo "selected";?>>Não</option>
                </select>
            </div>
        </div>
        
        <button type="button" id="habilitar" class="btn btn-primary" onclick="habilitarCampos()">Habilitar edição</button>
        <button disabled type="submit" id="salvar" class="btn btn-success" disabled >Salvar</button>
   
    </form>    
    <?php
    }else{
        echo '<div class="p-3 mb-2 bg-danger text-white">Dados inválidos</div>';
    }
    ?>
</div>