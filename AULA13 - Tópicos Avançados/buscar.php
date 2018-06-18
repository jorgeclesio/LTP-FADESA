<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Aula7 - inicial -->
	<meta charset="UTF-8">
	<title>Inicial - Georreferenciamento</title>
	<link href="css/style.css" rel="stylesheet">
<?php require 'conexao.php';?>
</head>
<body>
<main>
	<?php require 'includes/header.php' ?>
	<div id="informacoes">
		<section>
	<?php
	$busca=$_GET['busca'];
	$sql ="SELECT * from ALUNO WHERE NOME LIKE '%$busca%'";
	$resultado=mysqli_query($conexao,$sql);
	while ($aluno = mysqli_fetch_array($resultado)){
	?>
		<a href="index.php">
			<div class="resultado">
				<h3><?php echo $aluno['nome']; ?></h3>
				<div class="infor_user">
					<h4>Endereço:<?php echo $aluno['endereco']; ?></h4>
					<h4>FADESA </h4><H4> - </H4><h4>ADS</h4>
				</div>
			</div>			
			</a>		
	<?php } ?>

		</section>
	</div>
	<div id="mapas">
		<section>Mapa 1</section>
		<section>Mapa 2</section>
	</div>
	<?php include 'includes/footer.php' ?>
</main>
</body>
