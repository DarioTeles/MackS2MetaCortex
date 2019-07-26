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
		<link rel="stylesheet" type="text/css" href="CSS\style_missoes_e_valores.css" />
		<title>Missões e Valores</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="sobre.html"><b>Sobre </a> |</b> Missões e Valores <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
			<h3>Missões e Valores</h3>
			<br>
			<p>Uma empresa é um organismo vivo. Tem personalidade, imagem e cultura própria. É constituída por profissionais com características e habilidades diferentes, mas que, juntos, se complementam em busca de objetivos e sonhos em comum. Resumimos aqui os nossos valores, a nossa missão e a nossa visão. Elementos que fazem parte do nosso jeito de ser, que são reflexo da nossa maneira de pensar e orientam a nossa forma de agir. Estamos construindo nosso futuro!</p>
			<br>
			<header>
				<img src="Imagens\imagem007.jpg" alt="Missões e Valores" title="Missões e Valores">
			</header>
			<br>
			<ul>
				<li><b>Nossa Missão:</b> Atender com excelência às demandas dos clientes, pelo desenvolvimento e oferta de produtos e serviços que contribuam para a melhoria da qualidade de vida das pessoas, gerando riqueza de forma sustentável;</li> 
				<br>
				<li><b>Nossa Visão:</b> Ser empresa de referência, reconhecida como a melhor opção por clientes, colaboradores, comunidade, fornecedores e investidores, pela qualidade de nossos produtos, serviços e relacionamento;</li> 
				<br>
				<li><b>Nossos Valores:</b> integridade, comprometimento, valorização humana, superação dos resultados, melhoria contínua, inovação e sustentabilidade.</li> 
			</ul>
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
