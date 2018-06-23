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
				<td>Nome:</td>
				<td><?php $natural=$aluno['id_municipio']; echo $aluno['nome'] ;?> </td><td>Sobrenome:</td><td><?php echo $aluno['sobrenome'] ;?> </td>
			</tr>
			<tr>
				<td>Endereço:</td><td><?php echo $aluno['endereco'] ;?> </td><td>Contato:</td><td><?php echo $aluno['contato'] ;?> </td>
			</tr>
			<tr>
				<td>Naturalidade:</td><td>Marabá</td><td>UF:</td><td><?php echo $aluno['uf'] ;?> </td>
			</tr>
			<tr>
				<td>Sexo:</td><td><?php echo $aluno['sexo'] ;?> </td><td>Data Nascimento:</td><td><?php echo date('d-m-Y', strtotime($aluno['data_nascimento']));
				
				?></td>
			</tr>		
			<tr>
				<td>Curso:</td><td>ADSF</td><td>Instituição:</td><td>FADESA</td>
			</tr>
		</table>
		<a href="atualizar.php?id=<?php echo$id;?> ">Editar Aluno</a>
		<?php } } else {echo "Olá, seja bem vindo!";}?>
		</section>
	</div>
	
	<div id="mapas">
		<section><?php
	$sql = "select * from municpiospa where id=$natural";
	$cidade = mysqli_query($conexao,$sql);
	while ($cdd=mysqli_fetch_array($cidade)){?>
		<iframe height="150px" width="284px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyABNrDJjpwNCq7_XkdRacEE83L-nAKMCfI&#10;&amp;q=<?php echo$cdd['nm_municip'];?>,PA&amp;zoom=5">
		</iframe>
	<?php } ?>
		</section>

		<section >Mapa 2</section>
	</div>
	<?php include 'includes/footer.php' ?>

</main>

</body>