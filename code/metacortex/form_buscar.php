<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS\style.css" />
		<link rel="stylesheet" type="text/css" href="CSS\style_cadastro.css" />
		<title>Dados de Cadastro</title>
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <style>
            td {border-bottom: 1px solid #ddd;border-right: 1px solid #ddd;}
        </style>
	</head>
    
	<body> 
		<header> 
			<?php include 'menu.php';?>

			<nav id="guia_paginas">
				<br>
					<p> Leitura de Cadastros <p>
				<br>
			</nav>
		</header>

		<article id="conteudo">
            <br>
            <header><h2>Dados de Cadastros:</h2></header>
            <br>
            <?php
                // Conetando ao BD
                include "conecta_mysql.php";

                $resultado = mysqli_query($conexao, "SELECT * from tb_cadastros") or die("Não foi possível acessar a tabela: ".mysqli_error($conexao));
                echo "<div style='overflow-x:auto;'><table>";
                if($resultado){
                    echo "<tr><td>Id:  </td>
                        <td>Nome Completo:  </td>
                        <td> CPF: </td>
                        <td> Sexo: </td>
                        <td> E-mail: </td>
                        <td> Confirmar E-mail: </td>
                        <td> Data de Nascimento: </td>
                        <td> Estado: </td>
                        <td> Cidade: </td>
                        <td> Empresa: </td>
                        <td> Imagem: </td>
                        <td> Username: </td>
                        <td> Senha: </td>
                        <td> Confirmar Senha:</td>
                        </tr>";
                    while($row = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo "<td>".$row["id"]. " </td>
                            <td>".$row["nome_completo"]. " </td>
                            <td>".$row["cpf"]." </td>
                            <td>".$row["sexo"]." </td>
                            <td>".$row["email"]." </td>
                            <td>".$row["email_confirmacao"]." </td>
                            <td>".$row["data_nascimento"]." </td>
                            <td>".$row["estado"]." </td>
                            <td>".$row["cidade"]." </td>
                            <td>".$row["empresa"]." </td>
                            <td>".$row["imagem"]." </td>
                            <td>".$row["username"]." </td>
                            <td>".$row["senha"]." </td>
                            <td> ".$row["confirmar_senha"]."</td>";
                        echo "</tr>";
                    }
        
                }
                echo "</table></div>";
                mysqli_close($conexao);
            ?>
            <br>
            <br>
            <br>
        </article>

		<?php include 'footer.php';?>
	</body>
</html>
