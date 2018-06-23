
<?php
require 'conexao.php';

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$naturalidade = $_GET['naturalidade'];
$endereco = $_GET['endereco'];
$uf = $_GET['uf'];
$sexo = $_GET['sexo'];
$nascimento = $_GET['nascimento'];
$curso = $_GET['curso'];
$instituicao = $_GET['instituicao'];
$id = $_GET['id'];

$sql = "UPDATE aluno set nome='$nome', sobrenome='$sobrenome' where id='$id'";

mysqli_query($conexao,$sql);

header ("location: index.php?id=$id");
?>