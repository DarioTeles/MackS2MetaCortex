<?php session_start();
    if( isset($_SESSION['email_login']) ){
        $variable = '<a href="principal_usuario.php">'.$_SESSION['username'].'</a>' ;
    }else{
        $variable = '<a href="entrar.php"> Entrar </a>';
    }
?>

<?php
    // Conetando ao BD
    include "conecta_mysql.php";

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
    $imagem = htmlentities($_POST["imagem"]);
    $username = htmlentities($_POST["username"]);
    $senha = sha1(htmlentities($_POST["senha"]));
    $confirmar_senha = sha1(htmlentities($_POST["confirmar_senha"]));

    $erro = "falso";
    if ($nome_completo == ""){
	   $erro = "Erro - Nome completo.";
    }

    if ($cpf == "" && $erro=="falso"){
	   $erro = "Erro - CPF.";
    }

    if (! is_numeric($cpf)){
        $erro = "Erro - Campo CPF deve conter somente números.";
    }
    
    if ($sexo == "Selecione o Sexo" && $erro=="falso"){
	   $erro = "Erro - Sexo.";
    }

    if ($email == "" && $erro=="falso"){
	   $erro = "Erro - E-mail.";
    }
    
    if ($email_confirmacao != $email && $erro=="falso"){
	   $erro = "Erro - Confirmar E-mail.";
    }
    
    if ($data_nascimento == "" && $erro=="falso"){
	   $erro = "Erro - Data de Nascimento.";
    }
    
    if ($estado == "" && $erro=="falso"){
	   $erro = "Erro - Estado.";
    }
    
    if ($cidade == "" && $erro=="falso"){
	   $erro = "Erro - Cidade.";
    }
    
    if ($telefone == "" && $erro=="falso"){
	   $erro = "Erro - Telefone.";
    }
    
    if (! is_numeric($telefone)){
        $erro = "Erro - Campo Telefone deve conter somente números.";
    }

    if ($empresa == "" && $erro=="falso"){
	   $erro = "Erro - Empresa.";
    }

    if ($username == "" && $erro=="falso"){
	   $erro = "Erro - Username.";
    }

    if ($senha == "" && $erro=="falso"){
	   $erro = "Erro - Senha.";
    }

    if ($confirmar_senha == "" && $erro=="falso"){
	   $erro = "Erro - Confirmar Senha.";
    }
    
    if ($senha != $confirmar_senha && $erro=="falso"){
	   $erro = "Erro - Você deve digitar a mesma senha no campo confirmar senha.";
    }
    
    if (strlen(htmlentities($_POST["senha"])) < 8 && $erro=="falso"){
        $erro = "Senha fraca. A senha tem que ter no mínimo 8 caracteres.";
    }

    if($erro != "falso"){ 
        echo "<script>alert('".$erro."');</script>";
    }else {
        if (isset($nome_completo)&&isset($cpf)&&isset($sexo)&&isset($email)&&isset($email_confirmacao)&&isset($data_nascimento)&&isset($estado)&&isset($cidade)&&isset($telefone)&&isset($empresa)&&isset($imagem)&&isset($username)&&isset($senha)&&isset($confirmar_senha)){

        // Executando operação de inserção
        $sql = "INSERT INTO tb_cadastros (nome_completo, cpf, sexo, email, email_confirmacao, data_nascimento, estado, cidade, telefone, empresa, imagem, username, senha, confirmar_senha) VALUES('".$nome_completo."','".$cpf."','".$sexo."','".$email."','".$email_confirmacao."','".$data_nascimento."','".$estado."','".$cidade."','".$telefone."','".$empresa."','".$imagem."','".$username."','".$senha."','".$confirmar_senha."')";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

            if ($resultado==TRUE){
                echo "<script>alert('Cadastro inserido com sucesso.');window.location='entrar.php';</script>";
                //header("Location: entrar.php");
            } else {
                echo "Erro na inserção.";
            }
        } else { echo "erro";}
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS\style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_entrar.css" />
		<title>Cadastro </title>
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
            <header><h2>Cadastro:</h2></header>
            <br>
            <h2>Dados</h2>
            <p>Nome_completo = <?php echo $nome_completo; ?></p>
            <p>CPF = <?php echo $cpf; ?></p>
            <p>E-mail = <?php echo $email; ?></p>
            <p>Confirmar E-mail = <?php echo $email_confirmacao; ?></p>
            <p>Sexo = <?php echo $sexo; ?></p>
            <p>Data de Nascimento = <?php echo $data_nascimento; ?></p>
            <p>Estado = <?php echo $estado; ?></p>
            <p>Cidade = <?php echo $cidade; ?></p>
            <p>Telefone = <?php echo $telefone; ?></p>
            <p>Empresa = <?php echo $empresa; ?></p>
            <?php echo "<p><img src='".$imagem."' width='84' height='84'</p>"; ?>
            <p>Username = <?php echo $username; ?></p>
            <p>Senha = <?php echo $senha; ?></p>
            <p>Confirmar Senha = <?php echo $confirmar_senha; ?></p>
        
        </article>
		<?php include 'footer.php';?>
	</body>
</html>
