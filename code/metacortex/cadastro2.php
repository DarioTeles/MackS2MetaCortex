<?php session_start();
    if( isset($_SESSION['email_login']) ){
        $variable = '<a href="principal_usuario.php">'.$_SESSION['username'].'</a>' ;
    }else{
        $variable = '<a href="entrar.php"> Entrar </a>';
    }
?>

<?php
    $nome_completo = htmlentities($_POST["nome_completo"]);
    $cpf = htmlentities($_POST["cpf"]);
    $sexo = htmlentities($_POST["sexo"]);
    $email = htmlentities($_POST["email"]);
    $email_confirmacao = htmlentities($_POST["email_confirmacao"]);
    $data_nascimento = htmlentities($_POST["data_nascimento"]);
    $estado = htmlentities($_POST["estado"]);
    $cidade = htmlentities($_POST["cidade"]);
    $telefone = htmlentities($_POST["telefone"]);
    $empresa = htmlentities($_POST["empresa"]);

    $imagem = $_FILES['imagem'];
    $tamanho_maximo=$_POST['MAX_SIZE_FILE'];
    
    // 1. Definir extensões possíveis
    $tipos_aceitos = array(	"image/gif", "image/png", "image/bmp", "image/jpeg");

    // 2. Validar o arquivo enviado
    if($imagem['error'] != 0) {
        echo '<p style="font-weight:bold;color:red">Erro no Upload do arquivo<br>';
        switch($arquivo['error']) {
            case  UPLOAD_ERR_INI_SIZE:
                echo 'O Arquivo excede o tamanho máximo permitido.';
                break;
            case UPLOAD_ERR_FORM_SIZE:
				echo 'O Arquivo enviado é muito grande.';
				break;
			case  UPLOAD_ERR_PARTIAL:
				echo 'O upload não foi completo.';
				break;
			case UPLOAD_ERR_NO_FILE:
				echo 'Nenhum arquivo foi informado para upload.';	
				break;
        }
		exit;
    }
			
    if($imagem['size']==0 OR $imagem['tmp_name']==NULL) {
        echo 'Nenhum arquivo enviado.';
        exit;
	}

	if($imagem['size']>$tamanho_maximo) {
        echo 'O Arquivo enviado é muito grande (Tamanho Máximo = '.$tamanho_maximo.' bytes).';
        exit;
	}
    
    if(array_search($imagem['type'],$tipos_aceitos)===FALSE) {
		echo 'O Arquivo enviado é do tipo ('.$arquivo['type'].') não aceito para upload. Os tipos aceitos são: ';
		echo '<pre>';
		print_r($tipos_aceitos);
		echo '</pre>';
		exit;
    }
    
    // Agora podemos copiar o arquivo enviado
	if (!file_exists('Imagens_Cadastro')) {
		mkdir('Imagens_Cadastro', 0777, true);
	}

    $destino = "Imagens_Cadastro/".$imagem['name'];

    if(move_uploaded_file($imagem['tmp_name'],$destino)) {
				
        // Tudo Ok enviamos o endereço da imagem para a próxima página e enviar para o banco.
            $hidden_destino = "<input type='hidden' name='imagem' value='".$destino."'>";
        
    }else {
        echo 'Ocorreu um erro durante o upload.';
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
	   <script type="text/javascript" language="javascript">
            function validacao_form(){
                verificacao = true;
                                
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
                
                if (form.senha.value.length < 8 && verificacao==true){ //verifica se tem mais de 4 caracter
                    alert ("Senha fraca. A senha tem que ter no mínimo 8 caracteres.");
                    document.getElementById("senha").focus(); //volta ao campo que está errado
                    return false; 
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
					<p> Cadastro <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Cadastre-se:</h2></header>
            <br>
            <form method="POST" action="cadastro3.php" name="form" onsubmit="return validacao_form()">
                <br>
                <input type="hidden" name="nome_completo" value="<?php echo $nome_completo; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="email_confirmacao" value="<?php echo $email_confirmacao; ?>">
                <input type="hidden" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                <input type="hidden" name="estado" value="<?php echo $estado; ?>">
                <input type="hidden" name="cidade" value="<?php echo $cidade; ?>">
                <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
                <input type="hidden" name="empresa" value="<?php echo $empresa; ?>">
                <?php echo $hidden_destino; ?>
                <label for="username">Username: &nbsp</label><input type="text" id="username" name="username" size="46"/><br>
                <br>
                <label for="senha">Senha: &nbsp</label><input type="password" id="senha" name="senha" size="50"/><br>
                <br>
                <label for="confirmar_senha">Confirmar Senha: &nbsp</label><input type="password" id="confirmar_senha" name="confirmar_senha" size="40"/><br>
                <br>
                <br>
                <input class="btn" type="submit" value="Enviar"/>
                <input class="btn" type="reset" value="Limpar"/>
            </form>
        </article>

		<?php include 'footer.php';?>
	</body>
</html>
