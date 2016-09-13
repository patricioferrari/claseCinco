<html>
<head>
	<title>APLICACION 34</title>
</head>
<body>
	<?php 
		 function Leer()
	 	{
	 		
	 		$estadisticaPalabras = fopen("misArchivos/palabras.txt", "r");
	 		$contadorLetras = array();
	 		$contadorLetras[0]=0;
	 		$contadorLetras[1]=0;
	 		$contadorLetras[2]=0;
	 		$contadorLetras[3]=0;
	 		$contadorLetras[4]=0;
	 		
	 		//leo renglon por renglon
	 		while (!feof($estadisticaPalabras))
	 		{
	 			$renglon = fgets($estadisticaPalabras);
	 			$palabras = explode(" ",ltrim(rtrim($renglon)));
	 			
	 			foreach ($palabras as $palabra)  
	 			{
	 				//(echo "$palabra";
	 				$cantidad = strlen($palabra);
	 				switch ($cantidad) 
	 				{
	 					case '1':
	 						$contadorLetras[0]++;
	 						break;
	 					case '2':
	 						$contadorLetras[1]++;
	 						break;
	 					case '3':
	 						$contadorLetras[2]++;
	 						break;
	 					case '4':
	 						$contadorLetras[3]++;
	 						break;

	 					default:
	 					if ($cantidad !=0 )
	 						$contadorLetras[4]++;
	 						break;
	 				}
	 			}


	 		}
	 		echo "<table border=1>";

	 		echo "<tr><td colspan=2> CANTIADAD DE LETRAS </td> </tr>";
	 		for ($i=0; $i<5; $i++) 
	 		{ 
	 		echo "<tr>";
	 		echo "<td> Cantidad de palabras con ".($i+1)." letras"."</td>";
	 		echo "<td>".$contadorLetras[$i]."</td>";
	 		echo "</tr>";
	 		}

	 		echo "</table>";
	 		fclose($estadisticaPalabras);

	 		//var_dump($contadorLetras);
	 		//GENERO TABLA
	 	}
	 	
	 ?>

	 
</body>
</html>