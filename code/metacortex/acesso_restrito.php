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
		<title>Restrição de Acesso</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Restrição de Acesso <p>
                    
				<br>
			</nav>
		</header>

		<article id="conteudo">
        		<h3> Restrição de Acesso </h3>
			<br>
            <p>Seu usuário não tem acesso à esse conteúdo. Entre em contato com o administrador.</p><br>
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
