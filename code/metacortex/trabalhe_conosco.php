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
		<link rel="stylesheet" type="text/css" href="CSS\style_trabalhe_conosco.css" />
		<title>Trabalhe Conosco</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" language="javascript">
                            function valida_form (){
                                if (form.nome.value == "")
                                {
                                    alert('Por favor, preencha o campo Nome.');
                                    document.getElementById("nome").focus()
                                }
                                if (form.email.value == "")
                                {
                                    alert('Por favor, preencha o campo E-mail.');
                                    document.getElementById("email").focus()
                                }
                            }
                        </script>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p><a href="contato.html"><b>Contato </a> |</b> Trabalhe Conosco <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <header>
                <h2>Trabalhe Conosco</h2>
            </header>
            <br>
            <p>Preencha os campos abaixo e envie seu currículo.</p>
            <br>
            <form name="form">
            <table border=0>
                <tr>
                    <td>Nome:</td>
                    <td colspan='3'> 
                    <input name ='nome' placeholder="Digite o seu nome.">
                    </input>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td colspan='3'> 
                        <input name = 'email' placeholder="Digite o seu e-mail.">
                    </td>
                </tr>
                <tr>
                    <td>Envie o seu currículo:</td>
                    <td colspan='3'> 
                    <input type="file" name="arquivo"/>
                    </td>
                </tr>
                <tr>
                    <td>Mensagem:</td>
                    <td> 
                        <br>
                        <textarea name='mensagem' rows='6' cols='60'></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn" type=submit value=Enviar onclick="valida_form()" onsubmit="return valida_form()">
                    </td>
                </tr>
            </table>
            </form>
        <img id="img_trabalhe_conosco" src="Imagens/trabalhe_conosco.jpg" alt="Trabalhe Conosco" title="Trabalhe Conosco"> 
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
