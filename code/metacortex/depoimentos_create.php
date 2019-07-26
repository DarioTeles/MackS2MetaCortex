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
    
    $email = htmlentities($_POST["email"]);
    $depoimento = htmlentities($_POST["depoimento"]);
    

    $erro = "falso";
    if ($email == ""){
	   $erro = "Erro - E-mail.";
    }

    if ($depoimento == "" && $erro=="falso"){
	   $erro = "Erro - Depoimento.";
    }
    
    if($erro != "falso"){ 
        echo "<script>alert('".$erro."');</script>";
    }else {
        if (isset($email)&&isset($depoimento)){

        // Executando operação de inserção
        $sql = "INSERT INTO tb_depoimentos (email, depoimento) VALUES('".$email."','".$depoimento."')";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
            
            if ($resultado==TRUE){
                echo "<script>alert('Obrigado! Você será redirecionado para nossa página de depoimentos.');window.location='depoimentos.php';</script>";
                //header("Location: entrar.php");
            } else {
                echo "Erro na inserção.";
            }
            
        } else { echo "erro";}
    }

?>
