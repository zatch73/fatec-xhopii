<?php 
require_once "funcoesBD.php";

function validarEmailSenha(){
    if(!empty(@$_POST['senha'] and !empty(@$_POST['email']))){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $conexao = conectarBD();
        $consulta = "SELECT email FROM funcionario WHERE email = '$email' AND senha = '$senha'";
        $lista = mysqli_query($conexao,$consulta);
        if(mysqli_fetch_assoc($lista) > 0){
            session_start();
            $_SESSION["login"] = "ok";
            header("Location:../view/home.php?error=SUCESSO");
        }else {
            header("Location: ../view/login.php?error=login");
        }
    }
}

function sessaoUsuario(){
    session_start();
    if(!@$_SESSION["login"] == "ok"){
        header("Location: ../view/login.php?error=ENTRAR");
    }
}
validarEmailSenha();
?>