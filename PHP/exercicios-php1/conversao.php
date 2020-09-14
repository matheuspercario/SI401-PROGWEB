<!DOCTYPE html>
<html lang = "pt">
<head>
	<title>Php ex.02 - Maiusculas</title>
	<style>
		p
		{
			font-size: 1.5em;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<?php
        $Cor = array('A' => 'Azul', 'B' => 'Verde', 'c' => 'Vermelho');
        $Cor = array_flip($Cor); 						//Permuta todas as chaves e seus valores associados em um array
        $Cor = array_change_key_case($Cor, CASE_UPPER); //Modifica a caixa de todas as chaves em um array, no caso CASE_UPPER (caixa alta)
        $Cor = array_flip($Cor); 						//Permuta todas as chaves e seus valores associados em um array
        

        echo "<p> Depois da conversao:</p> \n";

        foreach ($Cor as $chave => $valor) 
		{
			echo "[$chave] => $valor \n";
		}
	?>

</body>
</html>