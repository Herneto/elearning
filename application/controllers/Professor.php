<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {

    /**
     * Listar os curso que Eu sou instrutor
     * **/
    public function meusCursos() {
        $id = $this->session->userdata('id_usuario');
        $this->db->where('curso_usuario.id_usuario', $id);
        $data['cursos'] = $this->db->get('curso')->result();
        
        $this->load->view('includes/menu');
        $this->load->view('instrutor/meusCursos', $data);
        $this->load->view('includes/footer');
    }

    /**
     * Listar todos os cursos existentes
     * **/
    public function cursos() {
        //Obter o nome do Instrutor atrasves do ID
        $this->db->join('usuario', 'usuario.id_usuario=curso.id_usuario', 'inner');

        $dados['cursos'] = $this->db->get('curso')->result();

        $this->load->view('includes/menu');
        $this->load->view('cursos', $dados);
        $this->load->view('includes/footer');
    }

    /**
     * Ver os detalhes de um curso
     * $id, é o id do curso a ser visto
     * **/
    public function ver($id = null) {
        //Pegar o curso com $id
        $this->db->where('id_curso', $id);
        $this->db->join('usuario', 'usuario.id_usuario=curso.id_usuario', 'inner');
        $dados['curso'] = $this->db->get('curso')->result();
        
        //Listar os cursos
        $dados['cursos'] = $this->db->get('curso')->result();
        
        $this->load->view('includes/menu');
        $this->load->view('curso', $dados);
        $this->load->view('includes/footer');
    }

    /**
     * Mostrar o formulario de cadastro
     */
    public function addCurso() {
        $this->load->view('includes/menu');
        $this->load->view('addCurso');
        $this->load->view('includes/footer');
    }

    /**
     * Processor o formulario de cadastro
     * Adicionar o curso no sistema
     * **/
    public function addCursoPost() {
        $dados['curso'] = $this->db->get('curso')->result();
        $next = count($dados['curso']);

        $data['id_curso'] = $next + 1;
        $data['id_usuario'] = $this->session->userdata('id_usuario');
        $data['titulo'] = $this->input->post('titulo');
        $data['descricao'] = $this->input->post('descricao');
        $data['preco'] = $this->input->post('preco');

        if ($this->db->insert('curso', $data)) {
            redirect('curso/' . $data['id_curso']);
        } else {
            redirect('addCurso');
        }
    }

    public function remover($id = null) {
        $this->verificar_acesso();
        $this->db->where('id_usuario', $id);
        $this->db->delete('usuario');
        $this->load->view('includes/header');
        $this->load->view('professor/alunos');
        $this->load->view('includes/footer');
    }

}
