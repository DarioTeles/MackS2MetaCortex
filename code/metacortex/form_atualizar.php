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
            <header><h2>Gerenciamento de Clientes - ATUALIZAR</h2></header>
            <br>
            <form action='update.php' method='POST'style="margin-left: 15px;">    
                <br>
                <label for="id">Id: &nbsp</label><input type="text" id="id" name="id" size="2"/><br><br>
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
                <input type='submit' class="btn" value='Atualizar' />
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include 'footer.php';?>
    
</body>
</html>