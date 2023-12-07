<?php

require 'model/lojas.php';
include 'model/produtos.php';

function index()
{
    $lojas = listaLojas();
    $produtos = listaProdutosPorRank();

    include 'view/home.html';
}
