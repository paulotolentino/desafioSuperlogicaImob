<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastros extends CI_Controller {

	public function index(){
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/footer');
    }
    
    public function proprietario(){
        $dados['pagina'] = 'cadastrar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGÃO_PES') != NULL &&
            $this->input->post('ST_SEXO_PES') != NULL &&
            $this->input->post('DT_NASCIMENTO_PES') != NULL &&
            $this->input->post('ST_NACIONALIDADE_PES') != NULL &&
            $this->input->post('ST_CEP_PES') != NULL &&
            $this->input->post('ST_ENDERECO_PES') != NULL &&
            $this->input->post('ST_NUMERO_PES') != NULL &&
            $this->input->post('ST_COMPLEMENTO_PES') != NULL &&
            $this->input->post('ST_BAIRRO_PES') != NULL &&
            $this->input->post('ST_CIDADE_PES') != NULL &&
            $this->input->post('ST_ESTADO_PES') != NULL &&
            $this->input->post('ST_OBSERVACAO_PES') != NULL &&
            $this->input->post('FL_RETERISSQN_PES') != NULL){

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/proprietarios");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            $proprietario = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGÃO_PES"=> $this->input->post('ST_ORGÃO_PES') ,
                "ST_SEXO_PES"=> $this->input->post('ST_SEXO_PES') ,
                "DT_NASCIMENTO_PES"=> $this->input->post('DT_NASCIMENTO_PES') ,
                "ST_NACIONALIDADE_PES"=> $this->input->post('ST_NACIONALIDADE_PES') ,
                "ST_CEP_PES"=> $this->input->post('ST_CEP_PES') ,
                "ST_ENDERECO_PES"=> $this->input->post('ST_ENDERECO_PES') ,
                "ST_NUMERO_PES"=> $this->input->post('ST_NUMERO_PES') ,
                "ST_COMPLEMENTO_PES"=> $this->input->post('ST_COMPLEMENTO_PES') ,
                "ST_BAIRRO_PES"=> $this->input->post('ST_BAIRRO_PES') ,
                "ST_CIDADE_PES"=> $this->input->post('ST_CIDADE_PES') ,
                "ST_ESTADO_PES"=> $this->input->post('ST_ESTADO_PES') ,
                "ST_OBSERVACAO_PES" => $this->input->post('ST_OBSERVACAO_PES'),
                "FL_RETERISSQN_PES" => $this->input->post('FL_RETERISSQN_PES'),
                "FL_PROPRIETARIOBENEFICIARIO_PES" => 1
            ));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $proprietario);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastros/proprietario');
        $this->load->view('frontend/template/footer');        
    }

    public function locatario(){
        $dados['pagina'] = 'cadastrar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGÃO_PES') != NULL &&
            $this->input->post('ST_SEXO_PES') != NULL &&
            $this->input->post('DT_NASCIMENTO_PES') != NULL &&
            $this->input->post('ST_NACIONALIDADE_PES') != NULL &&
            $this->input->post('ST_CEP_PES') != NULL &&
            $this->input->post('ST_ENDERECO_PES') != NULL &&
            $this->input->post('ST_NUMERO_PES') != NULL &&
            $this->input->post('ST_COMPLEMENTO_PES') != NULL &&
            $this->input->post('ST_BAIRRO_PES') != NULL &&
            $this->input->post('ST_CIDADE_PES') != NULL &&
            $this->input->post('ST_ESTADO_PES') != NULL &&
            $this->input->post('ST_OBSERVACAO_PES') != NULL &&
            $this->input->post('ID_FORMA_PAG') != NULL &&
            $this->input->post('FL_NAODOMICILIADO_PES') != NULL ){

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/locatarios");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            $locatario = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGÃO_PES"=> $this->input->post('ST_ORGÃO_PES') ,
                "ST_SEXO_PES"=> $this->input->post('ST_SEXO_PES') ,
                "DT_NASCIMENTO_PES"=> $this->input->post('DT_NASCIMENTO_PES') ,
                "ST_NACIONALIDADE_PES"=> $this->input->post('ST_NACIONALIDADE_PES') ,
                "ST_CEP_PES"=> $this->input->post('ST_CEP_PES') ,
                "ST_ENDERECO_PES"=> $this->input->post('ST_ENDERECO_PES') ,
                "ST_NUMERO_PES"=> $this->input->post('ST_NUMERO_PES') ,
                "ST_COMPLEMENTO_PES"=> $this->input->post('ST_COMPLEMENTO_PES') ,
                "ST_BAIRRO_PES"=> $this->input->post('ST_BAIRRO_PES') ,
                "ST_CIDADE_PES"=> $this->input->post('ST_CIDADE_PES') ,
                "ST_ESTADO_PES"=> $this->input->post('ST_ESTADO_PES') ,
                "ST_OBSERVACAO_PES" => $this->input->post('ST_OBSERVACAO_PES'),
                "ID_FORMA_PAG" => $this->input->post('ID_FORMA_PAG'),
                "FL_NAODOMICILIADO_PES" => $this->input->post('FL_NAODOMICILIADO_PES'),
                "FL_LOCATARIO_PES" => 1
            ));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $locatario);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastros/locatario');
        $this->load->view('frontend/template/footer');        
    }

    public function fiador(){
        $dados['pagina'] = 'cadastrar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGÃO_PES') != NULL &&
            $this->input->post('ST_SEXO_PES') != NULL &&
            $this->input->post('DT_NASCIMENTO_PES') != NULL &&
            $this->input->post('ST_NACIONALIDADE_PES') != NULL &&
            $this->input->post('ST_CEP_PES') != NULL &&
            $this->input->post('ST_ENDERECO_PES') != NULL &&
            $this->input->post('ST_NUMERO_PES') != NULL &&
            $this->input->post('ST_COMPLEMENTO_PES') != NULL &&
            $this->input->post('ST_BAIRRO_PES') != NULL &&
            $this->input->post('ST_CIDADE_PES') != NULL &&
            $this->input->post('ST_ESTADO_PES') != NULL &&
            $this->input->post('ST_OBSERVACAO_PES') != NULL ){

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/fiadores");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            $fiador = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGÃO_PES"=> $this->input->post('ST_ORGÃO_PES') ,
                "ST_SEXO_PES"=> $this->input->post('ST_SEXO_PES') ,
                "DT_NASCIMENTO_PES"=> $this->input->post('DT_NASCIMENTO_PES') ,
                "ST_NACIONALIDADE_PES"=> $this->input->post('ST_NACIONALIDADE_PES') ,
                "ST_CEP_PES"=> $this->input->post('ST_CEP_PES') ,
                "ST_ENDERECO_PES"=> $this->input->post('ST_ENDERECO_PES') ,
                "ST_NUMERO_PES"=> $this->input->post('ST_NUMERO_PES') ,
                "ST_COMPLEMENTO_PES"=> $this->input->post('ST_COMPLEMENTO_PES') ,
                "ST_BAIRRO_PES"=> $this->input->post('ST_BAIRRO_PES') ,
                "ST_CIDADE_PES"=> $this->input->post('ST_CIDADE_PES') ,
                "ST_ESTADO_PES"=> $this->input->post('ST_ESTADO_PES') ,
                "ST_OBSERVACAO_PES" => $this->input->post('ST_OBSERVACAO_PES'),
                "FL_FIADOR_PES" => 1
            ));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $fiador);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastros/fiador');
        $this->load->view('frontend/template/footer');        
    }

    public function corretor(){
        $dados['pagina'] = 'cadastrar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGÃO_PES') != NULL &&
            $this->input->post('ST_SEXO_PES') != NULL &&
            $this->input->post('DT_NASCIMENTO_PES') != NULL &&
            $this->input->post('ST_NACIONALIDADE_PES') != NULL &&
            $this->input->post('ST_CEP_PES') != NULL &&
            $this->input->post('ST_ENDERECO_PES') != NULL &&
            $this->input->post('ST_NUMERO_PES') != NULL &&
            $this->input->post('ST_COMPLEMENTO_PES') != NULL &&
            $this->input->post('ST_BAIRRO_PES') != NULL &&
            $this->input->post('ST_CIDADE_PES') != NULL &&
            $this->input->post('ST_ESTADO_PES') != NULL &&
            $this->input->post('ST_OBSERVACAO_PES') != NULL ){

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/corretores");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);

            $corretor = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGÃO_PES"=> $this->input->post('ST_ORGÃO_PES') ,
                "ST_SEXO_PES"=> $this->input->post('ST_SEXO_PES') ,
                "DT_NASCIMENTO_PES"=> $this->input->post('DT_NASCIMENTO_PES') ,
                "ST_NACIONALIDADE_PES"=> $this->input->post('ST_NACIONALIDADE_PES') ,
                "ST_CEP_PES"=> $this->input->post('ST_CEP_PES') ,
                "ST_ENDERECO_PES"=> $this->input->post('ST_ENDERECO_PES') ,
                "ST_NUMERO_PES"=> $this->input->post('ST_NUMERO_PES') ,
                "ST_COMPLEMENTO_PES"=> $this->input->post('ST_COMPLEMENTO_PES') ,
                "ST_BAIRRO_PES"=> $this->input->post('ST_BAIRRO_PES') ,
                "ST_CIDADE_PES"=> $this->input->post('ST_CIDADE_PES') ,
                "ST_ESTADO_PES"=> $this->input->post('ST_ESTADO_PES') ,
                "ST_OBSERVACAO_PES" => $this->input->post('ST_OBSERVACAO_PES'),
                "FL_CORRETOR_PES" => 1
            ));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $corretor);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastros/corretor');
        $this->load->view('frontend/template/footer');        
    }

    public function imovel(){
        $dados['pagina'] = 'cadastrar';

        if( $this->input->post('ST_TIPO_IMO') != NULL &&
            $this->input->post('ST_CEP_IMO') != NULL &&
            $this->input->post('ST_ENDERECO_IMO') != NULL &&
            $this->input->post('ST_NUMERO_IMO') != NULL &&
            $this->input->post('ST_COMPLEMENTO_IMO') != NULL &&
            $this->input->post('ST_BAIRRO_IMO') != NULL &&
            $this->input->post('ST_CIDADE_IMO') != NULL &&
            $this->input->post('ST_ESTADO_IMO') != NULL &&
            $this->input->post('PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES') != NULL &&
            $this->input->post('ST_IDENTIFICADOR_IMO') != NULL &&
            $this->input->post('VL_ALUGUEL_IMO') != NULL &&
            $this->input->post('VL_VENDA_IMO') != NULL &&
            $this->input->post('TX_ADM_IMO') != NULL &&
            $this->input->post('FL_TXADMVALORFIXO_IMO') != NULL ){

            // if(count($this->input->post('PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES')) == 1){
            //     $PROPRIETARIOS_BENEFICIARIOS_FL_PROPRIETARIO_PRB = [-1];
            //     $PROPRIETARIOS_BENEFICIARIOS_NM_FRACAO_PRB = [100];
            // }else{
            //     $PROPRIETARIOS_BENEFICIARIOS_FL_PROPRIETARIO_PRB = $this->input->post('PROPRIETARIOS_BENEFICIARIOS_FL_PROPRIETARIO_PRB');
            //     $PROPRIETARIOS_BENEFICIARIOS_NM_FRACAO_PRB = $this->input->post('PROPRIETARIOS_BENEFICIARIOS_NM_FRACAO_PRB');
            // }

            // $cont = 0;
            // foreach($this->input->post('PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES') as $ID_PESSOA){
            //     $PROPRIETARIOS_BENEFICIARIOS[$cont]["ID_PESSOA_PES"] = $ID_PESSOA;
            // }
            // $cont = 0;
            // foreach($PROPRIETARIOS_BENEFICIARIOS_FL_PROPRIETARIO_PRB as $FL_PROPRIETARIO){
            //     $PROPRIETARIOS_BENEFICIARIOS[$cont]["FL_PROPRIETARIO_PRB"] = $FL_PROPRIETARIO;
            // }
            // $cont = 0;
            // foreach($PROPRIETARIOS_BENEFICIARIOS_NM_FRACAO_PRB as $NM_FRACAO){
            //     $PROPRIETARIOS_BENEFICIARIOS[$cont]["NM_FRACAO_PRB"] = $NM_FRACAO;
            // }

            $PROPRIETARIOS_BENEFICIARIOS[0]["ID_PESSOA_PES"] = $this->input->post('PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/imoveis");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_POST, TRUE);
            

            $corretor = json_encode(array(
                "ST_TIPO_IMO"=> $this->input->post('ST_TIPO_IMO'),
                "ST_CEP_IMO"=> $this->input->post('ST_CEP_IMO'),
                "ST_ENDERECO_IMO"=> $this->input->post('ST_ENDERECO_IMO'),
                "ST_NUMERO_IMO"=> $this->input->post('ST_NUMERO_IMO'),
                "ST_COMPLEMENTO_IMO"=> $this->input->post('ST_COMPLEMENTO_IMO'),
                "ST_BAIRRO_IMO"=> $this->input->post('ST_BAIRRO_IMO'),
                "ST_CIDADE_IMO"=> $this->input->post('ST_CIDADE_IMO') ,
                "ST_ESTADO_IMO"=> $this->input->post('ST_ESTADO_IMO') ,
                "PROPRIETARIOS_BENEFICIARIOS"=> $PROPRIETARIOS_BENEFICIARIOS,
                "ST_IDENTIFICADOR_IMO"=> $this->input->post('ST_IDENTIFICADOR_IMO') ,
                "VL_ALUGUEL_IMO"=> $this->input->post('VL_ALUGUEL_IMO') ,
                "VL_VENDA_IMO"=> $this->input->post('VL_VENDA_IMO') ,
                "TX_ADM_IMO"=> $this->input->post('TX_ADM_IMO') ,
                "FL_TXADMVALORFIXO_IMO"=> $this->input->post('FL_TXADMVALORFIXO_IMO')
            ));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $corretor);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }

        $dados['proprietarios'] = buscarDadosAPI(1);

        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastros/imovel');
        $this->load->view('frontend/template/footer');        
    }    
}
