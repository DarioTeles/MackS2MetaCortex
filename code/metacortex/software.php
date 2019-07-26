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
		<link rel="stylesheet" type="text/css" href="CSS\style_software.css" />
		<title>Software</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>

			<nav id="guia_paginas">
				<br>
					<p><a href="solucoes.html"><b>Soluções </a> |</b> Software <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<section>
            			<h1>Intranet e Colaboração</h1><br>
                		<p>Os Portais Colaborativos conectam seu pessoal às informações, conhecimento e aplicativos críticos da empresa. A (nome de nossa consultoria) é especializada no desenvolvimento de projetos com a Microsoft SharePoint, uma plataforma de Portal de primeira linha que facilita criar e manter sites de portal para todos os aspectos da sua empresa.</p>
            		</section>    
            		<br>
            		<section>
            			<h1>Conectando processos, pessoas e informação</h1><br>
                		<ul>
                    			<li>Os projetos, as tecnologias e as iniciativas de TI devem estar alinhados com o planejamento estratégico da companhia;                         </li>
                    			<li>Eficiência empresarial demanda base de conhecimento e colaboração;</li>
                    			<li>A escassez de tempo das pessoas exige automação de processos operacionais;</li>
                    			<li>Necessidade de gerenciamento de regulamentações e Compliance; Integração de soluções e sistemas;</li>
                    			<li>Rápido ROI e baixo TCO.</li>
                		</ul>    
            		</section>
    	    		<br>
            		<section>
            			<h1>Conecte seu pessoal a informações e conhecimentos</h1><br>
                		<ul>
                    			<li>O acesso rápido e fácil às informações e conhecimentos críticos significa decisões melhores e execução mais rigorosa.                         </li>
                    			<li>Uma estrutura de portal abrangente facilita a criação de sites de portal que satisfazem a exigências específicas do seu público.</li>           
                    			<li>Uma arquitetura flexível, altamente escalonável oferece suporte para sites corporativos, de divisão, bem como de intranet, extranet e Internet.</li>
                		</ul>
            		</section>
            		<br>
            		<section>            			
                        <center><img src="Imagens/Sharepoint_img1.png" alt="Sharepoint" title="Sharepoint"></center>
            		</section>    
                </article>

		<?php include 'footer.php';?>
	</body>
</html>
