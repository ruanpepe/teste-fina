<?php

class produto
{
    public int $id;
    public int $codigo;
    public string $descricao;
    public string $marca;
    public array $vendasPorLoja = [];
    public int $quantidadeVendida = 0;
    public int $estoqueTotal = 0;

    /**
     * @param int $idProduto
     * @param int $codigo
     * @param ?string $descricao
     * @param ?string $marca
     */
    public function __construct(int $id, int $codigo, ?string $descricao = '', ?string $marca = '')
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->marca = $marca;
    }

    /**
     * Adiciona uma venda ao produto
     * 
     * @param loja $idLoja
     * @param int $quantidade
     * @param ?int $estoque
     * 
     * @return void
     */
    public function adicionaVenda(loja $loja, int $quantidade, ?int $estoque = 0): void
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
