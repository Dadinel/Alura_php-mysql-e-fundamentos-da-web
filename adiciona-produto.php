<?php include("cabecalho.php"); ?>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');
$query = "insert into produtos (nome,preco) values ('{$nome}',{$preco});";
$resultadoDaInsercao = mysqli_query($conexao, $query);
if(resultadoDaInsercao) { ?>
    <p class="alert-success">Produto <?=$nome;?> com o preço <?=$preco;?> adicionado com sucesso!</p>
<?php } else { ?>
    <p class="alert-danger">Produto <?=$nome;?> não foi adicionado.</p>
<?php } ?>

<?php //mysqli_close($conexao); ?>

<?php include("rodape.php"); ?>