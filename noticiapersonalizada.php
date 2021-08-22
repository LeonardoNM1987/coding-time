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

		
		

		<!--##### Exibir noticia enviada no index #####-->	
	
		
		<?php	
			if(isset($_POST["envianoticia"])){

				echo "<div class='leituradearquivo'>";

				echo "<h3>".$_POST["titulo"]."</h3><br>";
				echo $_POST['conteudo']."<br>";
				echo "</div>";
			}				
		?>	
		
			<button><a href="index.php">Voltar para Index!</a></button>

	</section>

</main>

<script>

</script>



</body>
</html>





