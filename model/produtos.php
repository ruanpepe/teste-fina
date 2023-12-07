<?php

require 'entities/produtos.php';

/**
 * Retorna um array com todos os produtos ordenado pela quantidade vendida
 * 
 * @return array
 */
function listaProdutosPorRank(): array
{
    $listaDeLojas = listaLojas();
    $produtos = [];
    $registrosDeVendas = require('DB/vendas.php');
    foreach ($registrosDeVendas as $registroDeVenda) {
        if (!isset($produtos[$registroDeVenda['id_produto_grade']])) {
            $produtos[$registroDeVenda['id_produto_grade']] = new produto($registroDeVenda['id_produto_grade'], $registroDeVenda['codigo'], $registroDeVenda['descricao'], $registroDeVenda['marca']);
        }

        $produtos[$registroDeVenda['id_produto_grade']]->adicionaVenda($listaDeLojas[$registroDeVenda['id_entidade']], $registroDeVenda['qtde'], $registroDeVenda['estoque']);
    }

    usort($produtos, function ($a, $b) {

        if (($b->quantidadeVendida <=> $a->quantidadeVendida) !== 0) {
            return ($b->quantidadeVendida <=> $a->quantidadeVendida);
        }

        return ($a->estoqueTotal <=> $b->estoqueTotal);
    });

    return $produtos;
}
