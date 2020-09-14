<!DOCTYPE html>
<html lang = "pt">
<head>
	<title>Php ex.03 - Comparação String</title>
	<style>
		body
		{
			font-family: monospace
		}
		p
		{
			text-indent: 2em;
		}
	</style>
</head>
<body>
	<h1>
		Comparando Strings
	</h1>
	<br/>
	<h4>
		Vetor = {"abcd", "abc", "de", "hjjj", "g", "wer"}
	</h4>
	<?php
		$VETOR = array("abcd", "abc", "de", "hjjj", "g", "wer");

		$aux1 = $VETOR[0];
		foreach ($VETOR as $chave => $valor) 
		{
			$a = strlen($aux1);
			$b = strlen($VETOR[$chave]);

			if($a >= $b)
			{
				$aux1 = $VETOR[$chave];
			}
		}
		$tamanhoMenor = strlen($aux1);
		echo "<p>O menor comprimento é $tamanhoMenor.</p>";


		$aux2 = $VETOR[0];
		foreach ($VETOR as $chave => $valor) 
		{
			$c = strlen($aux2);
			$d = strlen($VETOR[$chave]);

			if($c <= $d)
			{
				$aux2 = $VETOR[$chave];
			}
		}
		$tamanhoMaior = strlen($aux2);
		echo "<p>O maior comprimento é $tamanhoMaior.</p>";
	?>
</body>
</html>