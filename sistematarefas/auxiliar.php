<?php

function inserirData($data){
    if ($data == ""){
        return "0000-00-00";
    }
    $data_separada = explode ("/", $data);
    print_r ($data_separada);
    echo '<br>';

    $bd_data = "{$data_separada[2]}-{$data_separada[1]}-{$data_separada[0]}";
    echo $bd_data;
    echo '<br>';
    return $bd_data;
}

function mostrarData($data){
    if ($data == "" OR $data == "0000-00-00"){
        $msn = "sem prazo";
        echo $msn;
        return $msn;
    }
    $data_separada = explode ("-", $data);
    $exibir_data = "{$data_separada[2]}/{$data_separada[1]}/{$data_separada[0]}";
    echo $exibir_data;
    echo '<br>';
    return $exibir_data;
}


inserirData ("24/12/2021");
mostrarData ("2022-05-20");
mostrarData ("");