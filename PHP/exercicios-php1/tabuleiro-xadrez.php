<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Php ex.01 - Chess</title>
	<style>
		body {
			font-family: monospace;
			position: fixed;
			/* Elemento será fixado em relação a posição da janela */
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			margin: 0px;
			padding: 0px;
		}

		table,
		th,
		td {
			border: 1px solid black;
			margin: auto;
		}

		h1 {
			text-indent: 5px;
		}

		.corpo {
			width: 40%;
			margin-left: 15%;
			margin-right: 15%;
			padding-left: 15%;
			padding-right: 15%;

			height: 65%;
			margin-top: 10%;
			margin-bottom: 10%;
			padding-top: 2.5%;
			padding-bottom: 2.5%;

			text-align: center;
		}

		.linha {
			height: 30px;
		}

		.branco {
			padding: 0px;
			background-color: white;
			width: 28px;
			height: 28px;
		}

		.preto {
			padding: 0px;
			background-color: black;
			width: 28px;
			height: 28px;
		}
	</style>
</head>

<body>
	<div class="corpo">
		<h1>
			Tabuleiro de Xadrez
		</h1>
		<table>
			<?php
				for($l = 0; $l < 9; $l++)
				{
					echo "<tr class='linha'>";
					for ($c = 0; $c < 9; $c++) 
					{ 
						if(($l % 2) == ($c % 2))
						{
							echo "<td class='branco'></td>";
						} else
							{
								echo "<td class='preto'></td>";
							}
					}
					echo "</tr>";
				}	
			?>
		</table>
	</div>
</body>

</html>