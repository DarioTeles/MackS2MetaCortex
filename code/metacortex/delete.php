<?php
// conctando ao BD
include "conecta_mysql.php";

$id = htmlentities ($_POST['id']);

//executando a operação de SQl
$resultado = mysqli_query($conexao, 'DELETE FROM tb_cadastros WHERE id="'.$id.'"') or die ("Não foi possível executar a SQL:".mysqli_error($conexao));

if($resultado == TRUE){
    echo "<script>alert('Cadastro de id ".$id." removido com sucesso.');window.location='form.php';</script>";
}else{
    echo "</br>Erro na inserção";}

//fechamento da conexao
mysqli_close($conexao);
?>