<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Aula7 - inicial -->
	<?php
	$conexao = mysqli_connect ('localhost','root','','aula4') 
	or die ('Conexão falhou!');
	?>
	<meta charset="UTF-8">
	<title>Cadastrar - Georreferenciamento</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<main>
	<?php include 'includes/header.php' ?>
	<div id="informacoes">
		<section>
		<form action="cadastrar_usuario.php" method="GET">
		<table border="1px" width="" align="">
			<tr>
				<td>Nome:</td><td><input name="nome"></td><td>Sobrenome:</td><td><input name="sobrenome"></td>
			</tr>
			<tr>
				<td>Endereço:</td><td><input name="endereco"></td><td>Contato:</td><td><input name="contato"></td>
			</tr>
			<tr>
				<td>Natural:</td>
				<td>
				<select name="naturalidade">

				<?php
				$sql = "select *from municpiospa limit 10";
				$instituicoes = mysqli_query($conexao,$sql);
				while ($inst=mysqli_fetch_array($instituicoes )){
					echo "<option value='$inst[id]'>$inst[nm_municip]</option>";
				}
				?>
				</select>
				
				</td>
				<td>UF:</td>
				<td>
				<select name="uf">
				<option>PA</option>				
				</select>
				</td>
			</tr>
			<tr>
				<td>Sexo:</td>
				<td>
				<label for="m">M</label><input id="m" type="radio"  name="sexo" value="m"><BR>
				<label  for="f">F</label><input id="f" type="radio" name="sexo" value="f">
				</td>
				
				
				<td>Data Nascimento:</td><td><input name="nascimento" type="date"></td>
			</tr>		
			<tr>
				<td>Curso:</td>
				<td>
			<select name="curso">	
			<?php
				$sql = "select *from curso";
				$cursos = mysqli_query($conexao,$sql);
				while ($curso=mysqli_fetch_array($cursos)){
					echo "<option value='$curso[id]'>$curso[nome]</option>";
				}
				?></select>
				</td>
				<td>Instituição:</td><td>
				<select name="instituicao">

			<?php
				$sql = "select *from instituicao";
				$instituicoes = mysqli_query($conexao,$sql);
				while ($inst=mysqli_fetch_array($instituicoes )){
					echo "<option value='$inst[id]'>$inst[nome]</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
			<td><input type="submit"></td>
			</tr>
		</table>
		</form>
		</section>
	</div>
	
	<div id="mapas">
		<section>Mapa 1</section>
		<section>Mapa 2</section>
	</div>
	<?php include 'includes/footer.php' ?>
</main>



</body>