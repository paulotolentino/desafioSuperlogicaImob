<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {

	public function index(){
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/footer');
    }
    
    public function proprietarios($pagina = 1){

        $dados['cont'] = $pagina * 50 - 50;
        $dados['proprietarios'] = buscarDadosAPI(1, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/proprietarios');
		$this->load->view('frontend/template/footer');
    }

    public function locatarios($pagina = 1){

        $dados['cont'] = $pagina * 50 - 50;
        $dados['locatarios'] = buscarDadosAPI(2, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/locatarios');
		$this->load->view('frontend/template/footer');
    }

    public function fiadores($pagina = 1){

        $dados['cont'] = $pagina * 50 - 50;
        $dados['fiadores'] = buscarDadosAPI(3, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/fiadores');
		$this->load->view('frontend/template/footer');
    }

    public function corretores($pagina = 1){

        $dados['cont'] = $pagina * 50 - 50;
        $dados['corretores'] = buscarDadosAPI(4, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/corretores');
		$this->load->view('frontend/template/footer');
    }

    public function imoveis($pagina = 1){

        $dados['cont'] = $pagina * 50 - 50;
        $dados['imoveis'] = buscarDadosAPI(5, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/imoveis');
		$this->load->view('frontend/template/footer');
    }

    public function detalhesProprietario($id){

        $response = buscarDadosAPI(1, false, $id);

        $dados['proprietario'] = $response;
        $dados['pagina'] = 'consultar';

        if($response->status != 200 ){
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }else if(count($response->data) == 0){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Este usuário não existe</div>';
        }

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/proprietario');
		$this->load->view('frontend/template/footer');
    }

    public function detalhesLocatario($id){

        $response = buscarDadosAPI(2, false, $id);

        $dados['locatario'] = $response;
        $dados['pagina'] = 'consultar';

        if($response->status != 200 ){
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }else if(count($response->data) == 0){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Este usuário não existe</div>';
        }

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/locatario');
		$this->load->view('frontend/template/footer');
    }

    public function detalhesFiador($id){

        $response = buscarDadosAPI(3, false, $id);

        $dados['fiador'] = $response;
        $dados['pagina'] = 'consultar';

        if($response->status != 200 ){
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }else if(count($response->data) == 0){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Este usuário não existe</div>';
        }

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/fiador');
		$this->load->view('frontend/template/footer');
    }

    public function detalhesCorretor($id){

        $response = buscarDadosAPI(4, false, $id);

        $dados['corretor'] = $response;
        $dados['pagina'] = 'consultar';

        if($response->status != 200 ){
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }else if(count($response->data) == 0){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Este usuário não existe</div>';
        }

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/corretor');
		$this->load->view('frontend/template/footer');
    }

    public function detalhesImovel($id){

        $response = buscarDadosAPI(5, false, $id);
        $dados['proprietarios'] = buscarDadosAPI(1, false);
        $dados['imovel'] = $response;
        $dados['pagina'] = 'consultar';

        if($response->status != 200 ){
            $retorno = $response->data[0]->msg;
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">'.$retorno.'</div>';
        }else if(count($response->data) == 0){
            $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Este imóvel não existe</div>';
        }

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/imovel');
		$this->load->view('frontend/template/footer');
    }
}
