<?php

class loja
{
    public int $id;
    public string $codigo;
    public string $nome;
    public int $id_pessoa;

    /**
     * @param int $id
     * @param string $codigo
     * @param string $nome
     * @param int $id_pessoa
     */
    public function __construct(int $id, string $codigo, string $nome, int $id_pessoa)
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->id_pessoa = $id_pessoa;
    }
}
