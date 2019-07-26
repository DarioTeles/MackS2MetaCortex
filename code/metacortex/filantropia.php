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
		<link rel="stylesheet" type="text/css" href="CSS\style_filantropia.css" />
		<title>Filantropia</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="sobre.html"><b>Sobre </a> |</b> Filantropia <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
			<section>
				<h3>Instituto MetaCortex®</h3> 
				<br>
				<p>"Não basta fazer o bem, é preciso fazer bem feito."</p>
				<br>
				<img src="Imagens\imagem009.jpg" alt="Filantropia" title="Filantropia">
				<br>
				<p><b>Filantropia:</b>    tem  na  sua  origem  a  essência  do  nosso  trabalho.  De  origem  grega, “philos”  significa  “aquele  que  gosta  de”,  e  “anthropos”  significa  homem.  E  foi  justamente  o amor  à  humanidade  o  que  impulsionou  a iniciativa da MetaCortex®,  em  2009,  a começar  a  atuar  como  sociedade  voluntária  em  uma  instituição  da  zona  sul  de  São  Paulo. Conforme atuava, percebia que a instituição tinha boa vontade para ajudar o próximo, porém, falta  de  estrutura  organizacional,  gestão  e  administração  dos  recursos  e  dos  funcionários envolvidos  no  trabalho  –  o  que  causava  problemas  e limitava  o  poder  de  atuação  em  prol daquela  causa.  Mais  à  frente,  em  outra  empreitada  voluntária,  notou  a  mesma  necessidade em outra instituição.</p>
				<br>
				<br>
				<p><b><i> "[...]Queremos fazer um mundo diferente, um mundo sorridente, um mundo que pensa no futuro daquela gente [...]" (Autor Desconhecido)</b></i></p>
				<br>
				<br>
				<p>A  partir  dessas  experiências,  decidimos,  levar  as  bases  de   tecnologias  às  essas intuições. Desde 2011, nossa prestação de serviço sempre esteve comprometida em oferecer acesso e suporte à rede de informações de qualidade. Partindo do mesmo princípio, surgiu a ideia de se criar o Instituto MetaCortex®, trazendo não só a  conexão ao mundo digital, como  também outras iniciativas para esta  nova empreitada. O o amor à humanidade só pode ser concretizado de forma eficiente por meio de ações  de  gestão  profissionalizada  e  estruturada,  com  acesso  a  informações  e  capacitações técnicas, visando o desenvolvimento sustentável.</p> 
			</section>
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
