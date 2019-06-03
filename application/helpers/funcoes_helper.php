<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    function is_logged() {
        $_this = & get_instance();
        if (!$_this->session->has_userdata('usuario_id')) {
            redirect(base_url());
            exit;
        }
    }

    function InformacoesUsuario($coluna, $id_user = false) {
		$_this = & get_instance();	
		if ($id_user === false) {	
			$id_user = $_this->session->userdata('usuario_id');
		}	
		$_this->db->where('usuario_id', $id_user);
		$usuario = $_this->db->get('tb_usuarios');	
		if ($usuario->num_rows() > 0) {	
			return $usuario->row()->$coluna;
		}	
		return false;
    }
    
    function buscarDadosAPI($tipo, $pagina = false){

        switch($tipo){
            case 1:
                $url = "http://apps.superlogica.net/imobiliaria/api/proprietarios";
                break;
            
            case 2:
                $url = "http://apps.superlogica.net/imobiliaria/api/locatarios";
                break;

            case 3:
                $url = "http://apps.superlogica.net/imobiliaria/api/fiadores";
                break;

            case 4:
                $url = "http://apps.superlogica.net/imobiliaria/api/corretores";
                break;

            default:
                $url = "http://apps.superlogica.net/imobiliaria/api/imoveis";
        }

        if($pagina != false){
            $url .= '?pagina='.$pagina;
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "app_token: f9ad4d06-2373-3621-b8c3-e1fed4efea7e",
            "access_token: a09f3cde-4060-3740-8b3a-5498b1d3fb88"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }