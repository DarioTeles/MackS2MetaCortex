<?php session_start();
    if( isset($_SESSION['email_login']) ){
        $variable = '<a href="principal_usuario.php">'.$_SESSION['username'].'</a>' ;
    }else{
        $variable = '<a href="entrar.php"> Entrar </a>';
    }
?>

<?php 
    $opcao =$_POST['tipoCRUD'];
switch($opcao){
    case "C":
    $formulario = include('form_cadastrar.php');
    break;
    case "R":
    $formulario = include('form_buscar.php');
    break;
    case "U":
    $formulario = include('form_atualizar.php');
    break;
    case "D":
    $formulario = include('form_apagar.php');
    break;
    
    
}
    echo $formulario;
    ?>