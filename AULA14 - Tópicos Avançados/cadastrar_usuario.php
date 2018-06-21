
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

$sql = "INSERT INTO aluno(nome,sobrenome,endereco,contato,sexo,data_nascimento,uf,id_municipio,id_curso,id_instituicao) 
values
 ('$nome', '$sobrenome','$endereco','$contato','$sexo','$nascimento','$uf','$naturalidade','$curso','$instituicao')";

mysqli_query($conexao,$sql);

header ('location: cadastrar.php');
?>