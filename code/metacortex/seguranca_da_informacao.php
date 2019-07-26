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
		<link rel="stylesheet" type="text/css" href="CSS\style_seguranca_da_informacao.css" />
		<title>Segurança da Informação</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="solucoes.html"><b>Soluções </a> |</b> Segurança da Informação <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<section>
            			<h1>Gestão de Riscos e Vulnerabilidades de TI</h1><br>
                		<p>Um dos maiores desafios dos gestores é o fato das  organizações conviverem com uma quantidade quase infinita de vulnerabilidades e riscos que comprometem a segurança da informação , mas diporem de  recursos limitados para gerenciá-los. 

Alcançar o equilíbrio entre investimento, priorização de recursos e segurança é um dos nossos grandes objetivos e nos ajuda a vencer desafios como:</p>
                		<ul>
                    			<li>Tratar a segurança da informação conforme os objetivos de negócio;</li>
                    			<li>Alcançar excelência na Gestão de Riscos ( Risk Management ) e Vunerabilidades;</li>
                    			<li>Atender os normativos, proteger as informações e monitorar controles;</li>
                    			<li>Adotar as melhores práticas de mercado para governança de segurança da informação e TI;</li>
                    			<li>Conhecer os impactos das vulnerabilidades e ameaças sobre a infra-estrutura de TI;</li>
                    			<li>Tomar decisões com base em métricas e indicadores;</li>
                    			<li>Monitorar continuamente os riscos, e agir proativamente para tratar as vulnerabilidades nos ativos de TI;</li>
                    			<li>Conhecer as fontes de riscos;</li>
                    			<li>Implementar workflow e acompanhar o tratamento das vulnerabilidades e riscos.</li>
                		</ul>
            		</section>
            		<br>
            		<section>
            			<h1>Solução Integrada para Gestão e Monitoramento de Riscos e Vulnerabilidades</h1><br>
                		<p>A MetaCortex® oferece uma solução inovadora de gestão da segurança da informação (riscos, vulnerabilidades e conformidade em TI)  através do monitoramento contínuo e proativo. A solução automatiza o inventário, a coleta de dados dos ativos tecnológicos, a análise e a geração de relatórios com métricas e  indicadores, além de implementar workflow para tratamento dos riscos.

O Módulo Risk Manager pode ser integrado com diversos scanners de vulnerabilidades como Qualys, Nessus e Rapid7. Desta forma o software recebe automaticamente os ativos e as vulnerabilidades coletadas por meio de varreduras do scanner. As informações são agregadas ao Módulo Risk Manager, centralizando e facilitando  análise, avaliação e tratamento dos riscos tecnológicos com ganho de escala e perfomance.</p>
            		</section>
            		<br>
            <center><img src="Imagens/seguranca-informacao-politica.jpg" alt="Segurança da Informação" title="Segurança da Informação"></center>
		</article>
        </br>

		<?php include 'footer.php';?>
		
	</body>
</html>
