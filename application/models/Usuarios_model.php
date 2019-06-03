<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function busca_usuario($usuario, $senha){
        $this->db->where('usuario_senha', md5($senha));
        $this->db->where('usuario_login', strtolower($usuario));
        $get = $this->db->get('tb_usuarios');
        if($get->num_rows() == 1) return $get->row();
        else return false;
    }
    
    public function inserir_usuario($nome, $login, $email, $senha){
        $insert['usuario_nome'] = $nome;
        $insert['usuario_login'] = strtolower($login);
        $insert['usuario_email'] = strtolower($email);
        $insert['usuario_senha'] = md5($senha);
        return $this->db->insert('tb_usuarios', $insert);
    }
}
