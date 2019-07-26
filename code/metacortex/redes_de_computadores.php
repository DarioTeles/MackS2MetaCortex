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
		<link rel="stylesheet" type="text/css" href="CSS\style_redes_de_computadores.css" />
		<title>Redes de Computadores</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>

			<nav id="guia_paginas">
				<br>
					<p><a href="solucoes.html"><b>Soluções </a> |</b> Redes de Computadores <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<section>
            			<h1>Projetos de redes de computadores</h1>
                		<p>Desenvolvemos e implementamos as melhores soluções em projetos de infra-estrutura de redes de computadores, cabeadas ou sem fio. Cuidamos desde a montagem física até a implementação lógica, independentemente do porte do seu ambiente computacional.
 
Entre nossas soluções:</p>
            		</section>
            		<br>
            		<section>
            			<h1>Active Directory</h1>
            			<small>Proporcione maior segurança no acesso à rede interna, tenha maior controle sobre usuários e proteja diretórios e arquivos.</small>  
                		<p>O serviço de diretórios Active Directory, da Microsoft, armazena a base de dados de todos os usuários da rede. Com isso, somente usuários autenticados podem ter acesso à rede e fazer uso dos recursos da mesma. Com o Active Directory, arquivos e diretórios da sua empresa estarão protegidos, através de diretivas de segurança de acesso às mesmas. Assim, as informações da sua empresa poderão estar separadas entre departamentos com a máxima segurança.</p>
            		</section>
            		<br>
            		<section>
            			<h1>Proxy/firewall</h1>
            			<small>Controle o acesso à Internet de sua empresa e aumente a produtividade do seu funcionário.</small>
                		<p>Com o proxy/firewall Microsoft ISA Server, controle o acesso de seus funcionários aos recursos da Internet. Aumente a produtividade dos mesmos, impedindo o acesso a programas de mensagens instantâneas e sites inapropriados. Além disso, a rede de computadores da sua empresa estará prevenida contra possíveis invasões através da Internet.</p>
            		</section>
            		<br>
            		<section>
            			<h1>Interligação remota entre matriz e filiais</h1>
            			<small>Interligue ambientes remotos e torne sua rede interna acessível através da Internet de forma segura.</small>
                		<p>Através de soluções VPN (Virtual Private Network - Rede Privada Virtual), proporcionamos a comunicação entre ambientes remotos, tais como a matriz e filiais de sua empresa, de forma segura, com tráfego criptografado, utilizando a Internet como meio físico de transmissão. Além disso, em um ambiente externo, seus funcionários poderão acessar as informações e aplicativos da sua empresa através de seus dispositivos móveis (notebooks, PDA’s), proporcionando uma maior portabilidade e praticidade no acesso aos recursos.</p>
            		</section>
            		<br>
            		<section>
            			<h1>Soluções corporativas de segurança</h1>
            			<small>Aumente a segurança no uso dos recursos de sua rede interna.</small>
                		<p>De nada adianta desenvolver uma infra-estrutura sólida de segurança, formada por proxies, firewalls, anti-malwares, entre outros recursos, para proteger sua rede interna, enquanto seus usuários não estiverem cientes e educados quanto ao acesso e à segurança da mesma. Estatísticas apontam usuários da rede interna como os maiores responsáveis por problemas de segurança na mesma, devido à sua falta de preparação no uso dos recursos. Desde vazamento de informações até inoperância da rede são problemas que podem ocorrer, senão houver um bom preparo dos usuários. Pensando nisso, a MetaCortex® desenvolve políticas de segurança e acesso à rede, direcionadas aos usuários da rede da sua empresa. Uma vez adotadas, haverá uma redução significativa nos problemas de informática, sobretudo no que diz respeito à segurança das informações e integridade dos recursos computacionais.</p>
            		</section>
            		<br>
            		<section>
            			<h1>Backup de informações</h1>
            			<small>Previna-se contra possíveis desastres e perdas de informações.</small>
                		<p>Mesmo com os mais variados mecanismos de segurança às informações, ainda assim não se pode ignorar a possibilidade de algum desastre na rede e a conseqüente perda de informações. É de suma importância que sua empresa esteja preparada a situações desse tipo, podendo recuperar tais arquivos. Por isso, a MetaCortex® desenvolve e implementa as melhores rotinas de backup e restauração, de acordo com a necessidade da sua empresa, proporcionando uma maior disponibilidade e integridade das informações.</p>
            		</section>    
                </article>


		<?php include 'footer.php';?>
	</body>
</html>
