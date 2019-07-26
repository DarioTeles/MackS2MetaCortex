<?php 
    $matrizEstados = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR',"PE",'PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];  
    $imprime = "<option value='".$matrizEstados[0]."'>";

    for ($i = 1; $i < sizeof($matrizEstados); $i++){
        $imprime .= "<option value='".$matrizEstados[$i]."'>";
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
    <script type="text/javascript" language="javascript">
            function validacao_form(){
                verificacao = true;
                                
                if (form.nome_completo.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo Nome Completo.');
                    document.getElementById("nome_completo").focus();
                    verificacao = false; 
                }
                                
                if (form.cpf.value == ""  && verificacao==true){
                    alert('Por favor, preencha o campo CPF.');
                    document.getElementById("cpf").focus();
                    verificacao = false; 
                }
                                
                if (form.email.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo E-mail.');
                    document.getElementById("email").focus();
                    verificacao = false;
                }
                                
                if (form.email_confirmacao.value != form.email.value && verificacao==true){
                    alert('Por favor, preencha o campo Confirmar E-mail.');
                    document.getElementById("email_confirmacao").focus();
                    verificacao = false;
                }
                                
                if (form.cidade.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo Cidade.');
                    document.getElementById("cidade").focus();
                    verificacao = false;
                }
                                
                if (form.telefone.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo Telefone.');
                    document.getElementById("telefone").focus();
                    verificacao = false;
                }
                                
                if (form.empresa.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo Empresa.');
                    document.getElementById("empresa").focus();
                    verificacao = false; 
                }
                
                if (form.username.value == "" && verificacao==true){
                    alert('Por favor, preencha o campo Apelido.');
                    document.getElementById("username").focus();
                    verificacao = false; 
                }
                                
                if (form.senha.value == ""  && verificacao==true){
                    alert('Por favor, preencha o campo Senha.');
                    document.getElementById("senha").focus();
                    verificacao = false; 
                }
                
                if (form.confirmar_senha.value != form.senha.value  && verificacao==true){
                    alert('Por favor, preencha o campo Confirmar Senha.');
                    document.getElementById("confirmar_senha").focus();
                    verificacao = false; 
                }
                                
                return verificacao;
            }
        </script>
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
            <header><h2>Gerenciamento de Clientes - Cadastrar</h2></header>
            <br>
            <form action='create.php' method='POST'style="margin-left: 15px;" name="form" onsubmit="return validacao_form()">    
                <br>
                <label for="nome_completo">Nome Completo: &nbsp</label> <input type="text" id="nome_completo" name="nome_completo" size="71"/><br>
                <br>
                <label for="cpf">CPF: &nbsp</label><input type="text" id="cpf" name="cpf" size="31"/>
                <label for="sexo">&nbsp &nbsp Sexo: &nbsp</label>
                <select name="sexo">
                    <option value="Selecione o Sexo">Selecione o Sexo</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select><br>
                <br>
                <label for="email">E-mail: &nbsp</label><input type="email" id="email" name="email" size="28,5"/>
                <label for="email_confirmacao">&nbsp &nbsp Confirmar E-mail: &nbsp</label><input type="text" id="email_confirmacao" name="email_confirmacao" size="28,5"/><br>
                <br>
                <label for="data_nascimento">Data de Nascimento: &nbsp</label><input type="date" name="data_nascimento" size="20">
                <label for="estado">&nbsp &nbsp Estado: &nbsp</label>
                        <input list="estado" name="estado" size="2">
                            <datalist id="estado">
                                <?php echo $imprime; ?>
                            </datalist><br>
                <br>
                <label for="cidade">Cidade: &nbsp</label><input type="text" id="cidade" name="cidade" size="28"/>
                <label for="telefone">&nbsp &nbsp Telefone: &nbsp</label><input type="text" id="telefone" name="telefone" size="35"/><br>
                <br>
                <label for="empresa">Empresa: &nbsp</label><input type="text" id="empresa" name="empresa" size="78"/><br>
                <br>
                <label for="imagem">Imagem de Perfil: &nbsp</label>
                <input type="hidden" name="MAX_SIZE_FILE" value="100000">
                <input type="file" id="imagem" name="imagem"/><br>
                <br>
                <label for="username">Username: &nbsp</label><input type="text" id="username" name="username" size="46"/><br>
                <br>
                <label for="senha">Senha: &nbsp</label><input type="password" id="senha" name="senha" size="50"/><br>
                <br>
                <label for="confirmar_senha">Confirmar Senha: &nbsp</label><input type="password" id="confirmar_senha" name="confirmar_senha" size="40"/><br>
                <br>
                <br>
                <input type='submit' class="btn" value='Cadastrar' />
                </form>
    </article>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include 'footer.php';?>
    
</body>
</html>