<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Princess Model - Especialista em moda feminina</title>
<link href="imagens/logo/logoicon.png" rel="icon">
<link href="css/estilo.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/slick/slick.min.js"></script>
<link href="js/slick/slick-theme.css" rel="stylesheet">
<link href="js/slick/slick.css" rel="stylesheet">
</head>

<body>
	
	<?php include_once("nav.php"); ?>
	<?php include_once("header.php"); ?>

	<section id="corpo"></section>

	<footer>
		<article>
			<form action="envia.php" method="post" class="formulario">
				<input type="text" name="fnome" required placeholder="Seu nome" class="campo">
				<input type="email" name="femail" required placeholder="Seu melhor e-mail" class="campo">
				<input type="text" name="fassunto" required placeholder="Assunto" class="campo">
				<textarea name="fmsg" required placeholder="Sua mensagem" rows="7" class="campo"></textarea>
				<input type="submit" value="Enviar" class="botao">
			</form>
		</article>

		<article>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.2229120098004!2d-49.20288098511889!3d-25.464231083772663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcefffb389d1b9%3A0x69ec5f503d3b66d6!2sR.%20Tun%C3%ADsia%2C%20221%20-%20Cajuru%2C%20Curitiba%20-%20PR%2C%2082960-070!5e0!3m2!1spt-BR!2sbr!4v1606852323745!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</article>
	</footer>

</body>
</html>


