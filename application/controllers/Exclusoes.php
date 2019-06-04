<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exclusoes extends CI_Controller {

	public function index(){
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/footer');
    }
    
    public function excluir($tipo, $id){
        $dados['pagina'] = 'consultar';

        switch($tipo){
            case 1:
                $url = "http://apps.superlogica.net/imobiliaria/api/proprietarios";
                $flag = 'FL_PROPRIETARIOBENEFICIARIO_PES';
                break;
            
            case 2:
                $url = "http://apps.superlogica.net/imobiliaria/api/locatarios";
                $flag = 'FL_LOCATARIO_PES';
                break;

            case 3:
                $url = "http://apps.superlogica.net/imobiliaria/api/fiadores";
                $flag = 'FL_FIADOR_PES';
                break;

            case 4:
                $url = "http://apps.superlogica.net/imobiliaria/api/corretores";
                $flag = 'FL_CORRETOR_PES';
                break;

            default:
                $url = "http://apps.superlogica.net/imobiliaria/api/imoveis";
                $flag = 'FL_STATUS_IMO';
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        $_id = json_encode(array(
            "ID_PESSOA_PES" => $id,
            $flag => 0
        ));

        curl_setopt($ch, CURLOPT_POSTFIELDS, $_id);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));

        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        if($response->status == 200){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao excluir</div>';
        }else{
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }

        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/home');
        $this->load->view('frontend/template/footer');
    }

    public function locatario(){
        $dados['pagina'] = 'consultar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGAO_PES') != NULL &&
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

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

            $locatario = json_encode(array(
                "ID_PESSOA_PES"=> $this->input->post('ID_PESSOA_PES'),
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES'),
                "ST_ORGAO_PES"=> $this->input->post('ST_ORGAO_PES'),
                "ST_SEXO_PES"=> $this->input->post('ST_SEXO_PES'),
                "DT_NASCIMENTO_PES"=> $this->input->post('DT_NASCIMENTO_PES'),
                "ST_NACIONALIDADE_PES"=> $this->input->post('ST_NACIONALIDADE_PES'),
                "ST_CEP_PES"=> $this->input->post('ST_CEP_PES'),
                "ST_ENDERECO_PES"=> $this->input->post('ST_ENDERECO_PES'),
                "ST_NUMERO_PES"=> $this->input->post('ST_NUMERO_PES'),
                "ST_COMPLEMENTO_PES"=> $this->input->post('ST_COMPLEMENTO_PES'),
                "ST_BAIRRO_PES"=> $this->input->post('ST_BAIRRO_PES'),
                "ST_CIDADE_PES"=> $this->input->post('ST_CIDADE_PES'),
                "ST_ESTADO_PES"=> $this->input->post('ST_ESTADO_PES'),
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
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao editar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/consultas/locatario');
        $this->load->view('frontend/template/footer');        
    }

    public function fiador(){
        $dados['pagina'] = 'consultar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGAO_PES') != NULL &&
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

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

            $fiador = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGAO_PES"=> $this->input->post('ST_ORGAO_PES') ,
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
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao editar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/consultas/fiador');
        $this->load->view('frontend/template/footer');        
    }

    public function corretor(){
        $dados['pagina'] = 'consultar';

        if( $this->input->post('ST_NOME_PES') != NULL &&
            $this->input->post('ST_FANTASIA_PES') != NULL &&
            $this->input->post('ST_CNPJ_PES') != NULL &&
            $this->input->post('ST_CELULAR_PES') != NULL &&
            $this->input->post('ST_TELEFONE_PES') != NULL &&
            $this->input->post('ST_EMAIL_PES') != NULL &&
            $this->input->post('ST_RG_PES') != NULL &&
            $this->input->post('ST_ORGAO_PES') != NULL &&
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

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

            $corretor = json_encode(array(
                "ST_NOME_PES"=> $this->input->post('ST_NOME_PES'),
                "ST_FANTASIA_PES"=> $this->input->post('ST_FANTASIA_PES'),
                "ST_CNPJ_PES"=> $this->input->post('ST_CNPJ_PES'),
                "ST_CELULAR_PES"=> $this->input->post('ST_CELULAR_PES'),
                "ST_TELEFONE_PES"=> $this->input->post('ST_TELEFONE_PES'),
                "ST_EMAIL_PES"=> $this->input->post('ST_EMAIL_PES'),
                "ST_RG_PES"=> $this->input->post('ST_RG_PES') ,
                "ST_ORGAO_PES"=> $this->input->post('ST_ORGAO_PES') ,
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
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao editar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/consultas/fiador');
        $this->load->view('frontend/template/footer');        
    }

    public function imovel(){
        $dados['pagina'] = 'consultar';

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

            $PROPRIETARIOS_BENEFICIARIOS[0]["ID_PESSOA_PES"] = $this->input->post('PROPRIETARIOS_BENEFICIARIOS_ID_PESSOA_PES');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://apps.superlogica.net/imobiliaria/api/imoveis");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

            $imovel = json_encode(array(
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

            curl_setopt($ch, CURLOPT_POSTFIELDS, $imovel);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
                "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
            ));

            $response = json_decode(curl_exec($ch));
            curl_close($ch);

            if($response->status == 200){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao editar</div>';
            }else{
                $retorno = $response->data[0]->msg;
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
            }
            
        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/consultas/fiador');
        $this->load->view('frontend/template/footer');        
    }
    
}
