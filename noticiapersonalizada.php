<?php require "head.php"?>
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
		
		<div class="alinhabotao"><a href="index.php">Voltar para Index</a></div>

	</section>

</main>

<script>

</script>



</body>
</html>





