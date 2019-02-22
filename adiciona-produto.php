<?php 
    include("cabecalho.php");
    include("conecta.php");
    include("banco-produto.php");
?>

    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $descricao = $_GET["descricao"];

        if(insereProduto($conexao, $nome, $preco, $descricao)) {
    ?>

    <p class="text-success">Produto <?=$nome;?> com o preço <?=$preco;?> adicionado com sucesso!</p>

    <?php
        } else {
            $msg = mysqli_error($conexao);
    ?>

    <p class="text-danger">Produto <?=$nome;?> não foi adicionado: <?=$msg;?></p>

    <?php } ?>

<?php include("rodape.php"); ?>