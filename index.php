<!doctype html>
<?php
	if(file_exists("https://raw.githubusercontent.com/gjuniioor/eof-frontpage/gh-pages/frases.txt")){ //O script da preferencia ao arquivo que esta no Github (para facilitar a adiçao de frases).
		$file_frases = fopen("https://raw.githubusercontent.com/gjuniioor/eof-frontpage/gh-pages/frases.txt","r");		
		$conteudo = fread($file_frases,filesize("https://raw.githubusercontent.com/gjuniioor/eof-frontpage/gh-pages/frases.txt"));
	}else{ //Isso é pra caso o frases.txt  nao existir no Git, ele pega o arquivo local (pra fins de desenvolvimento).
		$file_frases = fopen("frases.txt","r");
		$conteudo = fread($file_frases,filesize("frases.txt"));	
	}
	$array_frases = explode("\n",$conteudo);
	$randomia = rand(1,sizeof($array_frases)) - 1;
	$display_frase = explode(";" , $array_frases[$randomia])[0];
	$display_autor = explode(";" , $array_frases[$randomia])[1];
	fclose($file_frases);
?>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>EOF Club</title>
		<meta name="author" content="gjuniioor">
		<meta property="og:url" content="http://eofclub.com">
		<meta property="og:site_name" content="EOF Club">
		<meta property="og:title" content="End Of File Club">
		<meta property="twitter:site" content="http://eofclub.com">
		<meta property="twitter:title" content="End Of File Club">
		<link rel="stylesheet" href="assets/css/main.css">

		<meta http-equiv="refresh" content="10;URL=http://eofclub.com/forum">
	</head>
	<body>
		<a href="https://github.com/gjuniioor/eof-frontpage"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6286ade715e9bea433b4705870de482a654f78a/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png"></a>

		<div class="container">
			<h1>@EndOfFile</h1>
			<h2>Não é só um fórum, é uma família!</h2>
			<br />
			<h3 class="reflection">
			<span class="phrase" id="phrase"><?php echo($display_frase); ?></span>
				-
				<span class="author" id="author"><?php echo($display_autor); ?></span>
			</h3>
			<br />
			<p>Você será redirecionado para o <a href="forum/" title="Fórum EOF">/forum</a> ...</p>
		</div>
	</body>
</html>
