<?php session_start();?>
<html>
    <?php
    echo "Data atual: ".date('d/m/y');
    ?>
    <head>
        <title>Gerenciador de Tarefas</title>
    </head>
    <body>
        <h1>Sistema de Gerenciamento de Tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="tarefa" />
                </label>
                <input type="submit" value="cadastrar" />
            </fieldset>
        </form>
        <?php

            if(array_key_exists ('tarefa', $_GET)) {
                $_SESSION['lista_de_tarefas'][] = $_GET['tarefa'];
                //echo "Tarefa cadastrada: ".$_GET['tarefa'];
            }
            $lista_de_tarefas = [];

            if(array_key_exists ('lista_de_tarefas', $_SESSION)){
                $lista_de_tarefas = $_SESSION['lista_de_tarefas'];
            }
        ?>
        <table>
            <tr>
                <th>Tarefas Cadastradas</th>
            </tr>
            <?php
                foreach ($lista_de_tarefas as $tarefa):?>
                <tr>
                    <td>
                        <?php echo $tarefa; ?>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php
               //print_r($lista_de_tarefas);
               //var_dump ($lista_de_tarefas);
            ?>
        </table>
    </body>
</html>


