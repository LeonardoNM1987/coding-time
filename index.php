<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Learning GIT</title>
</head>
<body>

<main>

	<section>

		<h1>Learning Something</h1>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum esse dolores maiores ipsam suscipit nemo atque dolorem minima necessitatibus excepturi asperiores vel minus, veniam aut at ullam amet quae eligendi? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci pariatur ea quibusdam at asperiores. Esse incidunt dicta, labore, adipisci ipsa illo ex, qui inventore id nobis neque! Aut, aliquid placeat..</p>
		<hr>
		<?php

		$var = "Leonardo";
		echo "Valor da variável: $var<br>";
				
		$arquivo = fopen("test.txt", "r") or die ("Não foi possível abrir o arquivo!");
				
		echo "----------------------<br>";					
		
		while($line = fgets($arquivo)){
			echo $line."<br>";
		}
		echo "----------------------<br>";	
		fclose($arquivo);
		
		
		?>

		




	</section>

</main>

</body>
</html>





