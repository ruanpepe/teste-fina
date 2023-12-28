<?php

require 'entities/lojas.php';

/**
 * Retorna um array com todas as lojas
 * 
 * @return array
 */
function listaLojas()
{
    $lojas = [];
    $registrosDeLojas = require('DB/lojas.php');
    foreach ($registrosDeLojas as $registroDeLoja) {
        $lojas[$registroDeLoja['id']] = new loja($registroDeLoja['id'], $registroDeLoja['codigo'], $registroDeLoja['nome'], $registroDeLoja['id_pessoa']);
    }

    return $lojas;
}
