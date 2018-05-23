<meta charset="UTF-8">

<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo "Ola, ".$nome ." "
. $sobrenome . "Seu suário é" .$usuario. "e  senha" .$senha;