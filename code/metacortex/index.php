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
        <meta name="author" content="Nome:Dário Teles de Oliveira.      TIA:41582391"/>
        <meta name="author" content="Nome:Pedro Couventaris Daspett.    TIA:41506375"/>
		<link rel="stylesheet" type="text/css" href="CSS\style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_index.css" />
		<title>Principal</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<!-- <nav id="guia_paginas">
				<br>
					<p><a href="index.html"> Principal </a><p>
				<br>
			</nav> -->
		</header>
        
        <article id="transacao">
   		<section>
                	<br>
                	<p><a href="sobre.php">Tenha o controle das informações da sua empresa com tranquilidade. 
			<br>Venha conhecer a MetaCortex®.</a></p>
            	</section>
		
        </article>
	<br>
	<article id="conteudo">
		<section>
			<header>	
				<img src="Imagens\imagem002.jpg" alt="Soluções" title="Soluções">
			</header>
			<br>
			<p><a href="solucoes.php">A solução que você precisa das pessoas em que você confia</a></p>
		</section>
		<section>				
			<header>
				<img src="Imagens\imagem006.jpg" alt="Redes de Computadores" title="Redes de Computadores">
			</header>
			<br>
			<p><a href="redes_de_computadores.php">Configurações de redes locais domésticos ou corporativos</a></p>
		</section>
		<section>
			<header>
				<img src="Imagens\imagem005.jpg" alt="Contato" title="Contato">
			</header>
			<br>
			<p><a href="contato.php">Serviços oferecidos na região paulistana, com maiores demandas na zona central</a></p>
		</section>
	</article>

        <?php include 'footer.php';?>
	</body>
</html>
