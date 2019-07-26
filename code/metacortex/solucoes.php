<?php session_start();
    if( isset($_SESSION['email_login']) ){
        $variable = '<a href="principal_usuario.php">'.$_SESSION['username'].'</a>' ;
    }else{
        $variable = '<a href="entrar.php"> Entrar </a>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="Nome:Bruno Henrique Santos França. TIA:41546962"/>
        <meta name="author" content="Nome:Dário Teles de Oliveira.      TIA:41582391"/>
        <meta name="author" content="Nome:Pedro Couventaris Daspett.    TIA:41506375"/>
        <meta name="author" content="Nome:Rafael de Lima Camargo.       TIA:41512588"/>
		<link rel="stylesheet" type="text/css" href="CSS/style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_solucoes.css" />
		<title>Soluções</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p>Soluções<p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
			<header>
				<h3>Soluções</h3>
			</header>
			<br>
			<p>No Brasil, a MetaCortex® possui uma equipe de arquitetos de soluções exclusiva para montar um projeto customizado que atenda às suas necessidades, levando em consideração as particularidades do seu negócio e da indústria em que você atua:</p>
			<br>
			<ul>
				<li>Projetos de Hardware;</li>
				<li>Projetos de Software;</li>
				<li>Projetos de Redes de Computadores;</li>
				<li>Projetos de Infraestrutura;</li>
				<li>Análise de Segurança da Informação.</li>	
			</ul>
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
