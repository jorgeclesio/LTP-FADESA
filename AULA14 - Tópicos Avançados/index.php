<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Aula7 - inicial -->
	<meta charset="UTF-8">
	<title>Inicial - Georreferenciamento</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<main>
<?php require 'conexao.php';?>
<?php require 'includes/header.php' ?>
	<div id="informacoes">
		<section>
		<?php
		if($_GET){
		$id=$_GET['id'];
		$sql="select * from aluno where id=$id";
		$resultado= mysqli_query($conexao,$sql);
		while ($aluno=mysqli_fetch_array($resultado)){
		?>
		<table border="1px" width="" align="">
			<tr>
				<td>Nome:</td><td><?php echo $aluno['nome'] ;?> </td><td>Sobrenome:</td><td><?php echo $aluno['sobrenome'] ;?> </td>
			</tr>
			<tr>
				<td>Endereço:</td><td><?php echo $aluno['endereco'] ;?> </td><td>Contato:</td><td><?php echo $aluno['contato'] ;?> </td>
			</tr>
			<tr>
				<td>Naturalidade:</td><td>Marabá</td><td>UF:</td><td><?php echo $aluno['uf'] ;?> </td>
			</tr>
			<tr>
				<td>Sexo:</td><td><?php echo $aluno['sexo'] ;?> </td><td>Data Nascimento:</td><td>00/00/00000</td>
			</tr>		
			<tr>
				<td>Curso:</td><td>ADSF</td><td>Instituição:</td><td>FADESA</td>
			</tr>
		</table>
		<?php } } ?>
		</section>
	</div>
	
	<div id="mapas">
		<section>
		<iframe height="150px" width="284px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyABNrDJjpwNCq7_XkdRacEE83L-nAKMCfI&#10;&amp;q=Parauapebas,PA&amp;zoom=8">
		</iframe>
		</section>
		<section>Mapa 2</section>
	</div>
	<?php include 'includes/footer.php' ?>

</main>



</body>