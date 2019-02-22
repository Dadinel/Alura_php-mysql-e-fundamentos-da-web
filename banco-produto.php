<?php

function listaProdutos($conexao) {
    //$produtos = []; //Nova sintaxe
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $resultado;
}

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome,preco) values ('{$nome}',{$preco});";
    return mysqli_query($conexao, $query);
}