<?php
    session_start();
    $email_login = htmlentities($_POST['email_login']);
    $senha_login = sha1(htmlentities($_POST["senha"]));
    
    // Conetando ao BD
    include "conecta_mysql.php";
    
    $resultado = mysqli_prepare($conexao, "SELECT id, username, email, senha from tb_cadastros WHERE email=? and senha=? LIMIT 1") or die("Não foi possível acessar a tabela: ".mysqli_error($conexao));

    mysqli_stmt_bind_param($resultado, "ss", $email_login, $senha_login);
    
    mysqli_stmt_execute($resultado);

    mysqli_stmt_bind_result($resultado, $id, $username, $email, $senha);
    
    mysqli_stmt_fetch($resultado);

    
    if ($email_login == $email && $senha_login == $senha) {
        $_SESSION['username'] = $username;
        $_SESSION['email_login'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: principal_usuario.php");
    }else {
        header("Location: entrar.php");
    }
		  
	  
    /* Fechando o statement */
    mysqli_stmt_close($resultado);

    /*if($resultado){
        $row = mysqli_fetch_array($resultado);
            echo "teste";
            if(empty($row)) {
                header("Location: entrar.php");
            }else{
                $_SESSION['username'] = $row['username'];
                $_SESSION['email_login'] = $row['email'];
                $_SESSION['senha'] = $row['senha'];
                header("Location: principal_usuario.php");
            }
        
        mysqli_close($conexao);
    
    }*/

    

?>