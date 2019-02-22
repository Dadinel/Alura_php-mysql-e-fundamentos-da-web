<?php

function listaSoProdutos($conexao) {
    //$produtos = []; //Nova sintaxe
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $resultado;
}

function listaProdutos($conexao) {
    //$produtos = []; //Nova sintaxe
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $resultado;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
    $query = "insert into produtos (nome,preco,descricao,categoria_id) values ('{$nome}',{$preco},'{$descricao}',{$categoria_id});";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = '{$id}';";
    return mysqli_query($conexao, $query);
}