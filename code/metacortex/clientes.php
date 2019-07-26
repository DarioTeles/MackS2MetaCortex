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
		<link rel="stylesheet" type="text/css" href="CSS\style_clientes.css" />
		<title>Clientes</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Clientes <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<header>
                		<h2>Clientes</h2>
            		</header>        
            		<br>
                	<p>A melhor maneira de conhecer a qualidade de nossos serviços é através daqueles com quem já trabalhamos.</p>
            		<br>
                	<p>Veja alguns dos nossos clientes logo abaixo.</p>
            		<br>
                    <br>
                	<ul>
                        <li><a href="http://www.caixa.gov.br">CAIXA;</a></li>
                        <li><a href="http://www.abril.com.br">Editora Abril;</a></li>
                        <li><a href="http://www.oabsp.org.br">OAB São Paulo;</a></li>
                        <li><a href="http://www.pirelli.com/tyres/pt-br/index">Pirelli;</a></li>
                        <li><a href="http://portal.mackenzie.br">Universidade Presbiteriana Mackenzie;</a></li>
                        <li><a href="http://maua.br/">Instituto Mauá de Tecnologia.</a></li>
                 	</ul>
                    <img id="img_clientes" alt="Clientes" title="Clientes" src="Imagens/clientes.jpg">
            
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
