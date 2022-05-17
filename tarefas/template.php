<html lang="pt-br">
    <head>
        <meta charset="utf-8"> <!--Caracteres especiais-->
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" type="text/css" href="stilo.css">
    </head>

    <body>
        <h1>Sistema de Gerenciamento de Tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name='nome' />
                </label>

                <label>
                    Prazo:
                    <input type="text" name='prazo' />
                </label>

                <fieldset>
                    <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name='prioridade' value="alta" />Alta
                        <input type="radio" name='prioridade' value="media"/>Media
                        <input type="radio" name='prioridade' value="baixa" checked/>Baixa
                    </label>
                </fieldset>

                <fieldset>
                    <legend>Status:</legend>
                    <label>
                        <input type="checkbox" name='status' value="1"/>Tarefa concluida
                    </label>
                </fieldset>

                <input type="submit" value="cadastrar" />
            </fieldset>
        </form>
        <table>
            <tr> <!--Table Row-->
                <th>Tarefas Cadastradas</th>
                <th>Prazos</th>
                <th>Prioridade</th>
                <th>Tarefa concluida</th>
            </tr>
            <?php
            foreach ($lista_de_tarefas ?? [] as $tarefa):?>
                <tr>
                    <td><?php echo $tarefa['nome']; ?>    </td>
                    <td><?php echo $tarefa['prazo']; ?>     </td>
                    <td><?php echo $tarefa['prioridade']; ?></td>
                    <td><?php echo $tarefa['status']; ?>    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>

    <footer>
        O PHP é dos inimigos, se fosse Python tava rodando.
    </footer>
</html>