<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario-Curriculo</title>
	<link rel="stylesheet" type="text/css" href="form.css"/>
</head>
<body>
<form>	
	<h1>Curriculum Vitae</h1>
	
<fieldset><legend>Identificação do Candidato</legend>
	<?php
		$tnome = $_POST["tnome"];
		echo "<br/>Nome: $tnome";
		$tcargo = $_POST["tcargo"];
		echo "<br/>Cargo de interesse: $tcargo";
		$tmail = $_POST["tmail"];
		echo "<br/>E-mail: $tmail";
				
		$tsexo = $_POST["tsexo"];
		echo "<br/>$tsexo";
		$tdata = $_POST["tdata"];
		echo "<br/>$tdata";
	?>
</fieldset>

<fieldset id="endereco"><legend>Endereço do Candidato</legend>
	<?php		
		$trua = $_POST["trua"];
		echo "<br/>Logradouro: $trua";
		$tnum = $_POST["tnum"];
		echo "<br/>Nº: $tnum";
		$testado = $_POST["testado"];
		echo "<br/>Estado: $testado";
		$tcity = $_POST["tcity"];
		echo "<br/>Cidade: $tcity";
	?>
</fieldset>	
<fieldset id="info"><legend>Mais Informações</legend>	
	<?php	
		$tformacao = $_POST["tformacao"];
		echo "<br/>Formação: $tformacao";
		$tarea = $_POST["tarea"];
		echo "<br/>Área de formação: $tarea";
	?>
</fieldset>

<fieldset id="exp"><legend>Experiência</legend>
	<?php
		$tempresa = $_POST["tempresa"];
		echo "<br/>Empresa: $tempresa";
		$tfuncao = $_POST["tfuncao"];
		echo "<br/>Cargo exercido: $tfuncao";
		$tano = $_POST["tano"];
		echo "<br/>Ano inicio: $tano";
		$tanofim = $_POST["tanofim"];
		echo "<br/>Ano fim: $tanofim";
	?>				  
</fieldset>

<fieldset id="msg"><legend>Mensagem do Candidato</legend>
	<?php			
		$tmsg = $_POST["tmsg"];
		echo "<br/>$tmsg";
	?>
</fieldset>	
<input type="button" value="Imprimir" onClick="window.print()" />
</form>

</body>
</html>