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

		<h1>O que é o PHP?</h1>

		<p>O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML. Em vez de muitos comandos para mostrar HTML (como acontece com C ou Perl), as páginas PHP contém HTML em código mesclado que faz "alguma coisa" (neste caso, mostra "Olá, eu sou um script PHP!"). O código PHP é delimitado pelas instruções de processamento (tags) de início e fim <strong>< ?php e ?></strong> que permitem que você entre e saia do "modo PHP".</p>
		<hr>
		
		<!--##### LEITURA DE ARQUIVO TXT #####-->
		
		<h2>Prática 01: As informações abaixo são lidas do arquivo <i>test.txt</i>, que encontra-se na raiz. </h2>
		
		<div class="leituradearquivo">		
		<?php		
			
			if(fopen("test.txt", "r")){
				$arquivo = fopen("test.txt", "r");		
				echo "<h3>".fgets($arquivo)."</h3><p>";
				while($line = fgets($arquivo)){
					echo $line."<br>";
				}	
				echo "</p>";			
				fclose($arquivo);
			}else
				echo "[ERRO: Não foi possível localizar o arquivo test.txt]";
			?>
		</div>	
		<hr>
		<h2>Prática 02: A notícia inserida abaixo irá carregar em uma nova página. </h2>
		<!--##### Inserir informação exibida na página #####-->		
		<form action="noticiapersonalizada.php" method="post" id="form01">
			<fieldset>
			<legend>Notícia Personalizada</legend>
			<label for="titulo">Título:</label><input type="text" id="titulo" name="titulo" required><br>
			<label for="conteudo">Conteúdo:</label><textarea type="textarea" id="conteudo" name="conteudo" rows="10" cols="50" required></textarea><br>
			<input type="submit" value="Enviar" name="envianoticia">
			</fieldset>
		</form>	
		
		

		<hr>



	</section>

</main>

<script>



</script>



</body>
</html>





