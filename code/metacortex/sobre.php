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
		<link rel="stylesheet" type="text/css" href="CSS\style_sobre.css" />
		<title>Sobre</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Sobre <p>
                    
				<br>
			</nav>
		</header>

		<article id="conteudo">
        		<h3> Sobre a MetaCortex® </h3>
			<br>
            <p>A informação é considerada uma forma de riqueza, de poder para as empresas se estiver disponível de forma organizada, íntegra e segura. A Tecnologia da Informação (TI) representa, de certa forma, todas as subáreas da informática. Portanto, todos os sistemas informatizados que promovam ou facilitem o trânsito, a integridade e a segurança da informação são aliados indispensáveis na evolução das empresas.</p><br>
			<p>Fundada em 2010, a MetaCortex® é uma empresa de excelência em soluções de Tecnologia da Informação. Brasileira, com sede em São Paulo, atua nas áreas de consultoria, desenvolvimento, implantação, e suporte de sistemas, com foco em pequenas e médias empresas.</p><br>
			<p>Mais que prover tecnologia avançada e serviços especializados, nós da MetaCortex® nos ocupamos em promover uma solução completa para as suas demandas e objetivos de negócios. Ao longo desses anos, a MetaCortex® tem colaborado com seus clientes que encontram em nossos produtos e serviços uma forma de aperfeiçoar seu negócio, aumentando sua eficiência, qualidade e competitividade. Nosso crescimento é resultado da satisfação dos clientes e esta é a razão que nos motiva a continuar buscando a excelência nos relacionamentos comerciais, a qualidade do serviço que prestamos e a melhoria contínua da eficácia dos produtos, serviços e metodologia aplicada. Nas soluções que construímos utilizamos ferramentas com tecnologia de ponta, dos principais fornecedores do mercado de TI, todos de destaque no cenário mundial e dos quais somos parceiros de Negócios</p><br>
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
