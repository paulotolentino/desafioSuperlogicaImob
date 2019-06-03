<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model', 'modelusuarios');
	}

	public function index(){
        $dados['pagina'] = 'home';

        if($this->input->post('inputUser') != NULL && $this->input->post('inputSenha') != NULL){
            $usuario = $this->input->post('inputUser');
            $senha = $this->input->post('inputSenha');

            $user = $this->modelusuarios->busca_usuario($usuario, $senha);
            if($user){
                $usuario = array(
                    'id' => $user->usuario_id,
                    'nome' => $user->usuario_nome,
                    'email' => $user->usuario_email
                );
                $this->session->set_userdata($usuario);
            }else{
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Erro no login</div>';
            }

        }
        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/home');
        $this->load->view('frontend/template/footer');
    }
    
    public function logout(){
        $usuario = array('id', 'nome', 'email');

        $this->session->unset_userdata($usuario);

        $dados['pagina'] = 'home';

        is_logged();
    }

    public function cadastro(){
        $dados['pagina'] = 'home';

        if( $this->input->post('cadastroNome') != NULL &&
            $this->input->post('cadastroLogin') != NULL &&
            $this->input->post('cadastroEmail') != NULL &&
            $this->input->post('cadastroSenha') != NULL ){

            $nome = $this->input->post('cadastroNome');
            $login = $this->input->post('cadastroLogin');
            $email = $this->input->post('cadastroEmail');
            $senha = $this->input->post('cadastroSenha');

            $user = $this->modelusuarios->busca_usuario($login, $senha);
            if($user){
                $dados['mensagem'] = '<div class="p-3 mb-2 bg-danger text-white">Erro ao cadastrar</div>';
            }else{
                if($this->modelusuarios->inserir_usuario($nome, $login, $email, $senha)){
                    $dados['mensagem'] = '<div class="p-3 mb-2 bg-success text-white">Sucesso ao cadastrar</div>';
                }
            }
        }

        $this->load->view('frontend/template/header', $dados);
        $this->load->view('frontend/cadastro');
        $this->load->view('frontend/template/footer');
    }
}
