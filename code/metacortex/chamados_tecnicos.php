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
		<title>Chamados Técnicos</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 
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
                                if (form.ramal.value == "")
                                {
                                    alert('Por favor, preencha o campo Ramal.');
                                    document.getElementById("ramal").focus()
                                }
								if (form.patrimonio.value == "")
                                {
                                    alert('Por favor, preencha o campo Patrimônio.');
                                    document.getElementById("patrimonio").focus()
                                }
                                if (form.solicitacao.value == "")
                                {
                                    alert('Por favor, preencha o campo Solicitação.');
                                    document.getElementById("solicitacao").focus()
                                }
                                if (form.horario_preferencial.value == "")
                                {
                                    alert('Por favor, preencha o campo Horario Preferencial.');
                                    document.getElementById("horario_preferencial").focus()
                                }
                            }
                        </script>
	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Chamados Técnicos <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Abertura de chamado técnico:</h2></header>
            <br>
            <form name="form">
            <table border=0>
                <tr>
                    <td>Nome:</td>
                    <td colspan='3'> 
                    <input name ='nome' placeholder="Digite o seu nome."></input>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td colspan='3'> 
                        <input name = 'email' placeholder="Digite o seu seu e-mail.">
                    </td>
                </tr>
                <tr>
                    <td>Setor:</td>
                    <td><select name="setor">
                            <option> </option>
                            <option>Compras</option>
                            <option>Contabilidade</option>
                            <option>Diretoria</option>
                            <option>Comissões</option>
                            <option>Material</option>
                            <option>Expediente</option>
                            <option>Gráfica</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ramal:</td>
                    <td colspan='2'> 
                        <input name = 'ramal' placeholder="Digite o seu ramal."></input>
                    </td>
                </tr>
                <tr>
                    <td>Nº de Patrimônio/Nº de Série do Equipamento:</td>
                    <td> 
                        <input name = 'patrimonio' placeholder="Nº de Série"/> Notebook: 
                        <input name="notebook" type="checkbox" />
                    </td>
                </tr>
                <tr>
                    <td>Solicitação/Descrição do defeito:</td>
                    <td> 
                        <br>
                        <textarea name='solicitacao' rows='6' cols='40'></textarea>
                    </td>
                </tr>
                <tr>
                    <td>O serviço pode ser executado na sua ausência?</td>
                    <td>
                        <input type='radio'  name = 'atendimento_ausencia' value='sim'> Sim
                        <input type='radio'  name = 'atendimento_ausencia' value='não' CHECKED='checked'> Não </input>
                    </td>
                </tr>
                <tr>
                    <td>Horário preferencial de atendimento : </td>
                    <td> <input name ='horario_preferencial'></input></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <font id="horario"><i>(Horário de atendimento de chamados: Seg à Sex, das 08h às 17h.)</i></font>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <br>
                        <input class="btn" type=submit value=Enviar onclick="valida_form()" onsubmit="return valida_form()">
                        <input class="btn" type=reset value=Limpar>
                    </td>
                </tr>
        </table> 
        </form>
        <img id="img_chamados" src="Imagens/chamados.png" alt="Chamados" title="Chamados"/> 
        </article>


		<?php include 'footer.php';?>
	</body>
</html>
