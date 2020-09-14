<!DOCTYPE html>
<html lang="pt">
<head>
	<title>PHP - Capital Países</title>

	<style>
		body
		{
			background-color: lightgrey;
		}
		p
		{
			font-size: 1em;
		}
	</style>
</head>
<body>
	<h1>
		Exercício 1 PhP - Capital dos Países
	</h1>

	<?php 
		$ceu = array(	"Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo",
						"Belgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
						"Finlandia"=>"Helsinki", "França" => "Paris",
						"Eslovaquia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemanha"
						=> "Berlim", "Grecia" => "Atenas", "Irlanda"=>"Dublin",
						"Holanda"=>"Amsterdam", "Portugal"=>"Lisboa", "Espanha"=>"Madrid",
						"Suecia"=>"Stockholm", "Reino Unido"=>"Londres",
						"Chipre"=>"Nicosia", "Lituania"=>"Vilnius", "Republica
						Tcheca"=>"Praga", "Estonia"=>"Tallin", "Hungria"=>"Budapest",
						"Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
						"Polônia"=>"Varsovia"
					);

		ksort($ceu);
		foreach ($ceu as $chave => $valor) 
		{
    			echo "<p>A capital da $chave é $valor</p>\n";
		}
	?>

</body>
</html>