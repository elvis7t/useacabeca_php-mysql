<?php
require('..model/recordset.php');
$rs = new recordset();
extract($_POST);
$result = array();
$dados = array();

    $dados[''] = $var;

    if(!$rs->Insere($dados, "tabela")){
        $result['status'] = "OK";
        $result['mensagem'] = "Cadastro com sucesso";        
    }else{
        $result['status'] = "Erro";
        $result['mensagem'] = $rs->sql;        
    }
    echo json_encode($resul);
    exit;
?>