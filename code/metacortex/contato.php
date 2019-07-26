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
		<link rel="stylesheet" type="text/css" href="CSS\style_contato.css" />
		<title>Contato</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" language="javascript">
                            function valida_form(){
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
                                if (form.assunto.value == "")
                                {
                                    alert('Por favor, preencha o campo Assunto.');
                                    document.getElementById("assunto").focus()
                                }
								if (form.empresa.value == "")
                                {
                                    alert('Por favor, preencha o campo Empresa.');
                                    document.getElementById("empresa").focus()
                                }
                                if (form.cargo.value == "")
                                {
                                    alert('Por favor, preencha o campo Cargo.');
                                    document.getElementById("cargo").focus()
                                }
                                if (form.telefone.value == "")
                                {
                                    alert('Por favor, preencha o campo Telefone.');
                                    document.getElementById("telefone").focus()
                                }
                                if (form.cidade.value == "")
                                {
                                    alert('Por favor, preencha o campo Cidade.');
                                    document.getElementById("cidade").focus()
                                }
                                if (form.mensagem.value == "")
                                {
                                    alert('Por favor, preencha o campo Mensagem.');
                                    document.getElementById("mensagem").focus()
                                }
                            }
            </script>
	</head> 
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Contato <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            		<header><h3>Contato</h3></header>
            		<br>
            <br>
            
		  	<p><b>E-mail:</b> sac@metacortex.com.br.</p>
			<p><b>Telefone de Central de Serviço ao Cliente:</b> 0800 4149 00 11. </p> <br>
			<p><b>Endereços:</b></p>  
            <p>São Paulo, Av. das Nações Unidas, 545 - 14º andar</p>
            <p>Ed. WorkSPPark - Brooklin Novo - 04578-901 São Paulo - São Paulo.</p>
			<br>
            <br>
            <br>
            <img id="img_contato" src="Imagens/contato.png" alt="Contato" title="Contato"/>
			<h3>Formulário de Contato</h3>
            <br>
            <form name="form">
			<table border=0>
                		<tr>
                    			<td>Nome:</td>
                    			<td colspan='3'> 
                    			<input name ='nome' placeholder="Digite seu nome."></input>
                		</tr>
                		<tr>
                    			<td>E-mail:</td>
                    			<td colspan='3'> 
                                    <input name = 'email' placeholder="Digite seu e-mail."></input>
                    			</td>
                		</tr>
                		<tr>
                    			<td>Assunto:</td>
                    			<td colspan='3'> 
                        		<input name = 'assunto' placeholder="Digite o assunto."></input>
                    			</td>
                		</tr>
                		<tr>
                    			<td>Empresa:</td>
                    			<td colspan='2'> 
                        		<input name = 'empresa' placeholder="Digite o nome da sua empresa."></input>
                    			</td>
                		</tr>
                		<tr>
                    			<td>Cargo:</td>
                    			<td colspan='2'> 
                        		<input name = 'cargo' placeholder="Digite o seu cargo."></input>
                    			</td>
                		</tr>
                		<tr>
                    			<td>Telefone:</td>
                    			<td colspan='2'> 
                        		<input name = 'telefone' placeholder="Digite o seu telefone."></input>
                    			</td>
                		</tr>
                		<tr>
                    			<td>Estado</td> 
					<td><select name="estado"> 
						<option value="estado">Selecione o Estado</option> 
						<option value="ac">Acre</option> 
						<option value="al">Alagoas</option> 
						<option value="am">Amazonas</option> 
						<option value="ap">Amapá</option> 
						<option value="ba">Bahia</option> 
						<option value="ce">Ceará</option> 
						<option value="df">Distrito Federal</option> 
						<option value="es">Espírito Santo</option> 
						<option value="go">Goiás</option> 
						<option value="ma">Maranhão</option> 
						<option value="mt">Mato Grosso</option> 
						<option value="ms">Mato Grosso do Sul</option> 
						<option value="mg">Minas Gerais</option> 
						<option value="pa">Pará</option> 
						<option value="pb">Paraíba</option> 
						<option value="pr">Paraná</option> 
						<option value="pe">Pernambuco</option> 
						<option value="pi">Piauí</option> 
						<option value="rj">Rio de Janeiro</option> 
						<option value="rn">Rio Grande do Norte</option> 
						<option value="ro">Rondônia</option> 
						<option value="rs">Rio Grande do Sul</option> 
						<option value="rr">Roraima</option> 
						<option value="sc">Santa Catarina</option> 
						<option value="se">Sergipe</option> 
						<option value="sp">São Paulo</option> 
						<option value="to">Tocantins</option> 
					</select>
					</td>
                    		</tr>
                		<tr>
                    			<td>Cidade:</td>
                    			<td colspan='2'> 
                        			<input name='cidade' placeholder="Digite a cidade onde localiza sua empresa."></input>
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
                        			<input class="btn" type=submit value=Enviar onclick="valida_form()" onsubmit="return valida_form()"></input>
                    			</td>
                		</tr>
                
        		</table>
                </form>
                <img id="img_contato_email" src="Imagens/contato_email.jpg" alt="Contato E-mail" title="Contato E-mail">
            
		</article>


		<?php include 'footer.php';?>
	</body>
</html>
