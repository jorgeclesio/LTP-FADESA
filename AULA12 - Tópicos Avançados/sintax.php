<title>Sintaxe</title>
<meta charset="UTF-8">
<?php

$nome ="Eric";  //Variável
define("nome","Jorge"); //Constante

$sobrenome ='Cruz';
$nomecompleto=$nome." ".$sobrenome;
$idade="20";
// echo "<input type='date'>";
 $valor = 4+5;

 ?>
<?php
$usuario="eric";
$senha="1234";

if($usuario=="mayron" and $senha=="123"){ 
echo "<script>alert('Bem vindo, $usuario!');</script>";
}
else if ($usuario=="eric"){
	if ($senha!='123'){
	echo "Usuário correto e senha <b>INCORRETA</b>";
	}else {
		echo "ÒTimo! Dados corretos!";
	}
}
else{
	echo "Todos os dados estão incorretos!";
}

?>



<?php














// while ($numero<=10){
	// echo $numero++;
// }



// for ($numero=2;$numero<=5;$numero++){
	// echo "<li>";
// }


// if
// while 
