<?php

class loja
{
    public $id;
    public $codigo;
    public $nome;
    public $id_pessoa;

    /**
     * @param $id
     * @param $codigo
     * @param $nome
     * @param $id_pessoa
     */
    public function __construct($id, $codigo, $nome, $id_pessoa)
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->id_pessoa = $id_pessoa;
    }
}
