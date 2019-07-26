<?php 
    //conecta ao BD
    include "conecta_mysql.php";

    $nome_completo = htmlentities ($_POST['nome_completo']);
    $cpf = htmlentities ($_POST['cpf']);
    $sexo = htmlentities ($_POST['sexo']);
    $email = htmlentities ($_POST['email']);
    $email_confirmacao = htmlentities ($_POST['email_confirmacao']);
    $data_nascimento = htmlentities ($_POST['data_nascimento']);
    $estado = htmlentities ($_POST['estado']);
    $cidade = htmlentities ($_POST['cidade']);
    $telefone = htmlentities ($_POST['telefone']);
    $empresa = htmlentities ($_POST['empresa']);
    $imagem = htmlentities ($_POST['imagem']);
    $username = htmlentities ($_POST['username']);
    $senha = sha1(htmlentities ($_POST['senha']));
    $confirmar_senha = sha1(htmlentities ($_POST['confirmar_senha']));
    
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
        echo $senha;
        echo $confirmar_senha;
	   $erro = "Erro - Você deve digitar a mesma senha no campo confirmar senha.";
    }

    if($erro != "falso"){ 
        echo $erro;
    }else {
        if (isset($nome_completo)&&isset($cpf)&&isset($sexo)&&isset($email)&&isset($email_confirmacao)&&isset($data_nascimento)&&isset($estado)&&isset($cidade)&&isset($telefone)&&isset($empresa)&&isset($imagem)&&isset($username)&&isset($senha)&&isset($confirmar_senha)){

            
    //executando a operação de SQL
   $sql = "INSERT INTO tb_cadastros (nome_completo, cpf, sexo, email, email_confirmacao, data_nascimento, estado, cidade, telefone, empresa, imagem, username, senha, confirmar_senha) VALUES('".$nome_completo."','".$cpf."','".$sexo."','".$email."','".$email_confirmacao."','".$data_nascimento."','".$estado."','".$cidade."','".$telefone."','".$empresa."','".$imagem."','".$username."','".$senha."','".$confirmar_senha."')";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
            if($resultado == TRUE){
                echo "<script>alert('Cadastro inserido com sucesso.');window.location='form.php';</script>";
            }else{
                echo "<br/>Erro na inserção!";}
        } else {echo "erro";}
        }

        //fechamento da conexao
        mysqli_close($conexao);
?>