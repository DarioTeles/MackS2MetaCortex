<?php session_start();
    if(isset($_SESSION['email_login'])){
        isset($_SESSION['email_login']);
        unset( $_SESSION['email_login'] );
    }

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
		<link rel="stylesheet" type="text/css" href="CSS\style_entrar.css" />
		<title>Entrar</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
  
	<body> 
		<header> 
			<?php include 'menu.php';?>
			<nav id="guia_paginas">
				<br>
					<p> Entrar <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Entrar:</h2></header>
            <br>
            <form method="POST" action="session_start.php">
                <br>
                <label for="email_login">E-mail: &nbsp</label>
                <input type="text" id="email_login" name="email_login" size="53"/><br><br>
                <label for="senha">Senha: &nbsp</label>
                <input type="password" id="senha" name="senha" size="53,5"/><br>
                <br>
                <br>
                <br>
                <input class="btn" type="submit" value="Entrar"/><br><br><br>
                Não é cadastrado? <a href='cadastro.php'> Inscreva-se já.</a><br>    
                Esqueceu a senha? <a href='cadastro.php'> Clique aqui.</a>        
            </form>
        </article>

		<?php include 'footer.php';?>
	</body>
</html>
