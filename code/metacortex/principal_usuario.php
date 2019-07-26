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
		<link rel="stylesheet" type="text/css" href="CSS\style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_cadastro.css" />
		<title>Cadastro</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
    
	<body> 
		<header> 
			<?php include 'menu.php';?>

			<nav id="guia_paginas">
				<br>
                <p> Bem-vindo </p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Página do Usuário</h2></header>
            <br>
            <?php
                if( isset($_SESSION['email_login']) ){
                    echo "Olá " . $_SESSION['username'] ;
                }

            ?>
        </article>

		<?php include 'footer.php';?>
	</body>
</html>
