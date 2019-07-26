<?php
// conctando ao BD
include "conecta_mysql.php";

// executando a operação de SQL
$resultado = mysqli_query($conexao, "SELECT * from tb_cadastros")
                or die ("Não foi possível acessar a tabela: ".mysqli_error($conexao));

if ($resultado){
        while ($row = mysqli_fetch_array($resultado)){
        echo "Id: ".$row["id"]." - Nome: ".$row["nome_completo"]." - CPF: ".$row["cpf"]." - Sexo: ".$row["sexo"]." - Email: ".$row["email"]." - Confirmação de email: ".$row["email_confirmacao"]." - Username: ".$row["username"]." - Senha: ".$row["senha"]." - Confirmação de senha: ".$row["confirmar_senha"]." - Data de Nascimento: ".$row["data_nascimento"]." - Estado: ".$row["estado"]." - Cidade: ".$row["cidade"]." - Telefone: ".$row["telefone"]." - Empresa: ".$row["empresa"]." - Imagem: ".$row["imagem"]."<br>";
        }
        }

mysqli_close($conexao);
?>