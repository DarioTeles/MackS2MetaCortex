<?php session_start();
    if ($_SESSION['email_login'] != 'admin@1' || $_SESSION['senha'] != sha1('12345678')) {
        header("Location: acesso_restrito.php");
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
    <link rel="stylesheet" type="text/css" href="CSS\style_cadastro.css" />
    <title>Gerenciamento de Clientes</title>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <header> 
			<?php include 'menu.php';?>

			<nav id="guia_paginas">
				<br>
					<p> Administrador <p>
				<br>
			</nav>
	</header>
    
    <article id="conteudo">
            <br>
            <header><h2>Gerenciamento de Clientes:</h2></header>
            <br>
            
            <form action="crud.php" method="post" style="margin-left: 15px;">
                <br>
                <input type="radio" name="tipoCRUD" value="C" checked/>Criar<br/>
                <input type="radio" name="tipoCRUD" value="R"/>Ler(Buscar)<br/>
                <input type="radio" name="tipoCRUD" value="U"/>Atualizar<br/>
                <input type="radio" name="tipoCRUD" value="D"/>Apagar<br/>
                <br>
                <input type="submit" class="btn" value="Começar"/>
            </form>
    </article>
    
    <?php include 'footer.php';?>
    
</body>
</html>