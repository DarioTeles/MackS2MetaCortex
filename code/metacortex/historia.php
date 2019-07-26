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
		<link rel="stylesheet" type="text/css" href="CSS\style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_historia.css" />
		<title>História</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="sobre.html"><b>Sobre </a> |</b> História <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
			<h3>História</h3>
			<br>
			<p>Nascida na região da Vila Olimpia, vale do silício brasileiro, a MetaCortex® trabalha com clientes de vários segmentos e faz com que os mesmos sejam o seu maior ativo. Formada por quatro estudantes de ciência da computação, ela hoje é líder mundial no segmento de consultoria para empresas de tecnologia da informação, com presença em mais de trinta países e com capital aberto na NASDAQ. Seus fundadores tinham como visão investir e criar um oceano azul, ou seja, trabalhar em um mercado inexplorado. Depois de anos no vermelho, e graças a uma parceria formada com o Google, a MetaCortex® abre seu primeiro escritório na Avenida Paulista, coração financeiro do Estado de São Paulo, expandindo assim os negócios para outros países.</p><br><br>
			<img src="Imagens\vila.png" alt="História" title="História">
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
