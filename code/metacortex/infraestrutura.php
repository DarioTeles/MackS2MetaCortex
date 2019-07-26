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
		<link rel="stylesheet" type="text/css" href="CSS\style_infraestrutura.css" />
		<title>Infraestrutura</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="solucoes.html"><b>Soluções </a> |</b> Infraestrutura <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<section>
            			<h1>Overview</h1><br>
                		<p>Para atender as expectativas das empresas para a área de tecnologia da informação, existem alguns cenários possíveis para à infra-estrutura de tecnologia da informação (TI). As opções existentes se distinguem em: valor de investimento, garantia de serviço, segurança das informações, escalabilidade e tempo de vida útil do ambiente. A MetaCortex®, além de possuir projetos para os cenários mais comuns encontrados nas empresas, também customiza soluções na área para atender as mais diversas necessidades.</p>
            		</section>
            		<br>
            		<section>
            			<h1>Objetivos comuns de um projeto de TI</h1><br>
                		<ul>
                    			<li>Instanciar um ambiente de TI seguro, estável e confiável;</li>
                    			<li>Promover manutenção integral na área de TI;</li>
                    			<li>Indicar e acompanhar as negociações de compra junto aos fornecedores de equipamentos e serviços de telecom;</li>
                    			<li>Instalar e configurar os servidores e equipamentos envolvidos neste projeto.</li>
                    			<li>Monitorar a estabilidade dos ambientes de backbone e servidores, efetuando manutenções pro-ativas quando necessário;</li>
                    			<li>Efetuar atendimento emergencial nos servidores local ou remoto (24x7);</li>
                    			<li>Promover um atendimento rápido e eficiente utilizando um SLA de 4h para atendimentos emergenciais;</li>
                    			<li>Efetuar a manutenção nos terminais dos usuários, seguindo os melhores padrões de mercado.</li>
                		</ul>
            		</section>
            		<br>
            		<section>
            			
            <img src="Imagens/slide_servicos_infra_estrutura.jpg" alt="Infraestrutura" title="Infraestrutura">
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
