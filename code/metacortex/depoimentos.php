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
		<title>Depoimentos</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	</head> 

	<body> 
		<header> 
			<?php include 'menu.php';?>


			<nav id="guia_paginas">
				<br>
					<p> Depoimento de Clientes <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <?php
                // Conetando ao BD
                include "conecta_mysql.php";

                $resultado = mysqli_query($conexao, "SELECT * from tb_depoimentos") or die("Não foi possível acessar a tabela: ".mysqli_error($conexao));
                echo "<div style='overflow-x:auto;'><table>";
                if($resultado){
                    echo "<tr>
                        <td> E-mail: </td>
                        <td> &nbsp </td>
                        <td> Depoimento: </td>
                        </tr>";
                        
                    while($row = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo "<td>".$row["email"]. " </td><td> &nbsp </td>
                            <td></td>";
                        echo "</tr>";
                        echo "<tr>
                            <td></td><td> &nbsp </td>
                            <td>".$row["depoimento"]." </td>";
                        echo "</tr>";
                    }
        
                }
                echo "</table></div>";
                mysqli_close($conexao); ?>
        </article>


		<?php include 'footer.php';?>
	</body>
</html>
