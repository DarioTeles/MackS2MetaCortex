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
		<link rel="stylesheet" type="text/css" href="CSS\style_fornecedores.css" />
		<title>Fornecedores</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Fornecedores <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
			<header>
                		<h2>Fornecedores</h2>
            		</header>        
            		<br>
                	<p>Uma das bases da qualidade de serviço está direcionado para a qualidade das ferramentas e recursos que utilizamos para etendê-los. Conheça os nossos fornecedores:</p>
		</article>

		<article id="fornecedores">
			<img src="Imagens\Fornecedores\microsoft.jpg" alt="Microsoft" title="Microsoft">
			<img src="Imagens\Fornecedores\dell.png" alt="Dell" title="Dell">
			<img src="Imagens\Fornecedores\cisco.png" alt="Cisco" title="Cisco">
			<img src="Imagens\Fornecedores\furukawa.gif" alt="Furukawa" title="Furukawa">
		</article>
		
		<?php include 'footer.php';?>
	</body>
</html>
