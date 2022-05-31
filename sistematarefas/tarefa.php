<?php
session_start();
$conexao = '';

require "banco.php";

echo "Data atual: ".date('d/m/y');

$tarefa = [];
if ((array_key_exists ('nome', $_GET)) && $_GET['nome'] != '') {

    if (array_key_exists ( 'nome', $_GET )) {
        $tarefa['nome'] = $_GET['nome'];
    } else {
        $tarefa['nome'] = '';
    }

    if (array_key_exists ( 'prazo', $_GET )) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    if (array_key_exists ( 'prioridade', $_GET )) {
        $tarefa['prioridade'] = $_GET['prioridade'];
    }

    if (array_key_exists ( 'status', $_GET )) {
        $tarefa['status'] = $_GET['status'];
    } else {
        $tarefa['status'] = '0';
    }
    #print_r ($tarefa);
    $_SESSION['lista_de_tarefas'][] = $tarefa;
}
else{
    echo '<br>Insira uma tarefa';
}
//if(array_key_exists ('lista_de_tarefas', $_SESSION)){
//    $lista_de_tarefas = $_SESSION['lista_de_tarefas'];
//}

//$lista_de_tarefas = $_SESSION['lista_de_tarefas'];


$lista_de_tarefas = consultarTarefas ($conexao);
inserirTarefas($conexao, $tarefa);

include "template.php";

?>
