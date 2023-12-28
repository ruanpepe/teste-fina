<?php

class produto
{
    public $id;
    public $codigo;
    public $descricao;
    public $marca;
    public $vendasPorLoja = [];
    public $quantidadeVendida = 0;
    public $estoqueTotal = 0;

    /**
     * @param $idProduto
     * @param $codigo
     * @param $descricao
     * @param $marca
     */
    public function __construct($id, $codigo, $descricao = '', $marca = '')
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->marca = $marca;
    }

    /**
     * Adiciona uma venda ao produto
     * 
     * @param $idLoja
     * @param $quantidade
     * @param $estoque
     * 
     * @return void
     */
    public function adicionaVenda($loja, $quantidade, $estoque = 0)
    {
        if (!isset($this->vendasPorLoja[$loja->id])) {
            $this->vendasPorLoja[$loja->id] = [
                'quantidade' => 0,
                'estoque' => 0,
            ];
        }

        $this->quantidadeVendida += $quantidade;
        $this->estoqueTotal += $estoque;

        $this->vendasPorLoja[$loja->id]['quantidade'] += $quantidade;
        $this->vendasPorLoja[$loja->id]['estoque'] += $estoque;
    }
}
