<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefas';
$bdSenha = 'cdl2022web';
$bdBanco = 'banco_tarefas';


$conexao = mysqli_connect ($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao){
    echo "To dentro cumpadi, bora derrubibar esse banco!";
    echo "<br>";

    $sqlBusca = 'SELECT * FROM tarefas';

    $resultado = mysqli_query ($conexao, $sqlBusca);

    $tarefas = [];

    while ($tarefa = mysqli_fetch_assoc ($resultado)){
        $tarefas[] = $tarefa;
    }

    print_r($tarefas);

}else{
    echo "Deu ruim!";
    die();
}



