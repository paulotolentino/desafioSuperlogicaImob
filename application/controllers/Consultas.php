<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {

	public function index(){
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/footer');
    }
    
    public function proprietarios($pagina = 1){

        $dados['proprietarios'] = buscarDadosAPI(1, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/proprietarios');
		$this->load->view('frontend/template/footer');
    }

    public function locatarios($pagina = 1){

        $dados['locatarios'] = buscarDadosAPI(2, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/locatarios');
		$this->load->view('frontend/template/footer');
    }

    public function fiadores($pagina = 1){

        $dados['fiadores'] = buscarDadosAPI(3, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/fiadores');
		$this->load->view('frontend/template/footer');
    }

    public function corretores($pagina = 1){

        $dados['corretores'] = buscarDadosAPI(4, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/corretores');
		$this->load->view('frontend/template/footer');
    }

    public function imoveis($pagina = 1){

        $dados['imoveis'] = buscarDadosAPI(5, $pagina);
        $dados['pagina'] = 'consultar';
        $dados['num_pagina'] = $pagina;

        $this->load->view('frontend/template/header', $dados);
		$this->load->view('frontend/consultas/imoveis');
		$this->load->view('frontend/template/footer');
    }
}
