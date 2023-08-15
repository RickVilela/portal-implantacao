<?php

class Implantacao_model extends CI_Model{

    public function index()
    {
        return $this->db->get("implantacao")->result_array();
    }

    public function qtdImplantacoes()
    {
        return $this->db->from("implantacao")->count_all_results();
    }

    
    public function store($cliente)
    {
        $this->db->insert("implantacao", $cliente);
    }

    
}