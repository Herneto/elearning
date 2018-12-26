<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

    /**
     * Inscrever um aluno a um curso
     * $id, é o id do curso
     */
    public function inscrever($id = null) {
        $dados = $this->db->get('curso_usuario')->result();
        $next = count($dados);

        $data['id_curso_usuario'] = $next + 1;
        $data['id_curso'] = $id;
        $data['id_usuario'] = $this->session->userdata('id_usuario');
        if ($this->db->insert('curso_usuario', $data)) {
            redirect('curso/meusCursos');
        } else {
            redirect('curso/ver/' . $id);
        }
    }
    
    /**
     * Ver os cursos em que o usuario está a frequentar agora
     */
    public function direto() {
        $this->db->join('curso_usuario', 'curso.id_curso=curso_usuario.id_curso', 'inner');
        $id = $this->session->userdata('id_usuario');
        $this->db->where('curso_usuario.id_usuario', $id);
        $data['cursos'] = $this->db->get('curso')->result();
        
        $this->load->view('includes/menu');
        $this->load->view('direto', $data);
        $this->load->view('includes/footer');
    }

    /**
     * Listar os curso que estou inscrito,
     * insclusive os que já terminei
     * **/
    public function meusCursos() {
        $this->db->join('curso_usuario', 'curso.id_curso=curso_usuario.id_curso', 'inner');
        $id = $this->session->userdata('id_usuario');
        $this->db->where('curso_usuario.id_usuario', $id);
        $data['cursos'] = $this->db->get('curso')->result();
        
        $this->load->view('includes/menu');
        $this->load->view('meusCursos', $data);
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
        $this->db->where('curso.id_curso', $id);
        //Pegar os dados do instrutor
        $this->db->join('usuario', 'usuario.id_usuario=curso.id_usuario', 'inner');
        $dados['curso'] = $this->db->get('curso')->result();
        
        //Verificar se já estou inscrito
        $id_user = $this->session->userdata('id_usuario');
        $this->db->where('curso_usuario.id_usuario', $id_user);
        $this->db->where('curso_usuario.id_curso', $id);
        $dados['dado'] = $this->db->get('curso_usuario')->result();
        if(count($dados['dado']) > 0){
            $dados['inscrito'] = true;
        }else{
            $dados['inscrito'] = false;
        }
        
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
