<?php
    
function conectarBD(){
    $conexao = mysqli_connect("localhost","root","","xhopii");
    return($conexao);
}

function retornarClientes(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao,$consulta);
    return $listaClientes;
}




?>