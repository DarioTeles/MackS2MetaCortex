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
            <header><h2>Gerenciamento de Clientes - APAGAR</h2></header>
            <br>
    
        
                <form action='delete.php' method='POST' style="margin-left: 15px;">
                ID: <input type='text' name='id' /><br/>
                    <br>
                <input type='submit' value='REMOVER'/>
                </form>
    </article>
    
    <?php include 'footer.php';?>
    
</body>
</html>