<?php
// conctando ao BD
include "conecta_mysql.php";
    
    $id = htmlentities ($_POST['id']);
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
    $senha = htmlentities ($_POST['senha']);
    $confirmar_senha = htmlentities ($_POST['confirmar_senha']);

    $erro = "falso";

    if ($id == ""){
	   $erro = "Erro - Id.";
    }

    if ($nome_completo == "" && $erro=="falso"){
	   $erro = "Erro - Nome completo.";
    }

    if ($cpf == "" && $erro=="falso"){
	   $erro = "Erro - CPF.";
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

    if($erro != "falso"){ 
        echo $erro;
    }else {
        
        if (isset($nome_completo)&&isset($cpf)&&isset($sexo)&&isset($email)&&isset($email_confirmacao)&&isset($data_nascimento)&&isset($estado)&&isset($cidade)&&isset($telefone)&&isset($empresa)&&isset($imagem)&&isset($username)&&isset($senha)&&isset($confirmar_senha)){
            
        // executando a operação de SQL
        $resultado = mysqli_query($conexao, "UPDATE tb_cadastros SET      nome_completo='$nome_completo' , sexo='$sexo' , email='$email' , email_confirmacao='$email_confirmacao' , username='$username' , senha='$senha' , confirmar_senha='$confirmar_senha' , data_nascimento='$data_nascimento' , estado='$estado' , cidade='$cidade' , telefone='$telefone' , empresa='$empresa' , imagem='$imagem' WHERE id='$id'")
                or die ("Não foi possível acessar a SQL: ".mysqli_error($conexao));

        if ($resultado == TRUE){
            echo "<script>alert('Atualização do id ".$id." realizado com sucesso.');window.location='form.php';</script>";
        }else{
            echo "<br/>Erro na inserção!";
        }
    
        } else { echo "erro";}
    }
mysqli_close($conexao);
?>