<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefas';
$bdSenha = 'cdl2022web';
$bdBanco = 'banco_tarefas';

$conexao = mysqli_connect ($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao){
    echo "To dentro cumpadi, bora derrubibar esse banco!";
    echo "<br>";
        //print_r($tarefas);
}else{
    echo "Deu ruim!";
    die();
}

function consultarTarefas($conexao)
{
    $sqlConsulta = "SELECT * FROM tarefas";

    $resultado = mysqli_query ( $conexao, $sqlConsulta );

    $tarefas = [];

    while ($tarefa = mysqli_fetch_assoc ( $resultado )) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function inserirTarefas($conexao, $tarefa)
{
    $sqlInserir = "INSERT INTO tarefas (nome, prazo, prioridade, status)
                    VALUES (
                    {$tarefa['nome']},
                    {$tarefa['prazo']},
                    {$tarefa['prioridade']},
                    {$tarefa['status']}
                    )";

    mysqli_query ( $conexao, $sqlInserir );
}