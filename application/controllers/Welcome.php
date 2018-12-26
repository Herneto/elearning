<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Apresentar o dashboard
     * **/
    public function index() {
        $this->load->view('includes/menu');
        $this->load->view('index');
        $this->load->view('includes/footer');
    }
    
    /**
     * Listar as aulas de um curso
     * $id, é o id do curso
     */
    public function aulas($id = null) {
        $this->load->view('includes/menu');
        $this->load->view('aulas');
        $this->load->view('includes/footer');
    }

    public function editarAula() {
        $this->load->view('includes/menu');
        $this->load->view('editarAula');
        $this->load->view('includes/footer');
    }

    public function perfil($id = null) {
        $this->db->where('id_usuario', $id);
        $dados['user'] = $this->db->get('usuario')->result();
        $this->load->view('includes/menu');
        $this->load->view('profile', $dados);
        $this->load->view('includes/footer');
    }

    public function remover($id = null) {
        $this->verificar_acesso();
        //$this->nivel_usuario();
        $this->db->where('id_usuario', $id);
        $this->db->delete('usuario');
        $this->load->view('includes/header');
        $this->load->view('professor/alunos');
        $this->load->view('includes/footer');
    }

    public function loginPost() {

        $email = $this->input->post('login');
        $senha = md5($this->input->post('senha'));

        $this->db->where('senha', $senha);
        $this->db->where('login', $email);
        $data['usuario'] = $this->db->get('usuario')->result();
        if (count($data['usuario']) == 1) {
            $dados['nomes'] = $data['usuario'][0]->nomes;
            $dados['apelidos'] = $data['usuario'][0]->apelidos;
            $dados['id_usuario'] = $data['usuario'][0]->id_usuario;
            $dados['login'] = $data['usuario'][0]->login;
            $dados['logado'] = true;
            $dados['nivel'] = $data['usuario'][0]->nivel;
            $this->session->set_userdata($dados);
            redirect('curso/direto');
        } else {
            redirect('welcome');
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect('welcome');
    }

    public function cadastro() {
        $this->load->view('registrar');
    }

    public function cadastroPost() {
        //Pegar o priximo ID
        $this->db->select('*');
        $dados['user'] = $this->db->get('usuario')->result();
        $next = count($dados['user']);

        $data['id_usuario'] = $next + 1;
        $data['nomes'] = $this->input->post('nome');
        $data['apelidos'] = $this->input->post('apelido');
        $data['login'] = $this->input->post('user');
        $data['senha'] = md5($this->input->post('senha'));
        $data['nivel'] = $this->input->post('nivel');

        if ($this->db->insert('usuario', $data)) {
            $data['logado'] = true;
            $this->session->set_userdata($data);
            redirect('welcome');
        }
    }

}
