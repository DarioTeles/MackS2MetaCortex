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
		<link rel="stylesheet" type="text/css" href="CSS\style_chamados_tecnicos.css" />
		<title>Depoimentos</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
    <script type="text/javascript" language="javascript">
        function valida_form (){
            if (form.nome.value == ""){
                alert('Por favor, preencha o campo Nome.');
                document.getElementById("nome").focus()
            }
            if (form.email.value == ""){
                alert('Por favor, preencha o campo E-mail.');
                document.getElementById("email").focus()
            }
            if (form.email.value == ""){
                alert('Por favor, preencha o campo Depoimento.');
                document.getElementById("depoimento").focus()
            }
			
        }
    </script>
	<body> 
		<header> 
			<?php include 'menu.php';?>
            
			<nav id="guia_paginas">
				<br>
					<p> Depoimento <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Conte-nos sua experiência conosco:</h2></header>
            <br>
            <form method="POST" action="depoimentos_create.php">
                <br>
                <br>
                <input type="hidden" name="email" value="<?php echo $_SESSION['email_login']; ?>">
                <label for="depoimento">Depoimento: &nbsp</label><br><br><textarea name='depoimento' id="depoimento" rows='6' cols='60'></textarea>
                <br>
                <br>
                <input class="btn" type="submit" value="Enviar" onclick="valida_form()" onsubmit="return valida_form()">
                <input class="btn" type="reset" value="Limpar">
            </form>
            <img id="img_chamados" src="Imagens/chamados.png" alt="Chamados" title="Chamados"/> 
        </article>


		<?php include 'footer.php';?>
	</body>
</html>
