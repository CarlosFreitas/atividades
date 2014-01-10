<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $estado = $_REQUEST["estado"];
    $observacoes = $_REQUEST["observacoes"];
    
    /*Obter  os dados do formulário*/
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    /*Fim - Obter  os dados do formulário*/
    
    /*Preencher o cadastro da pessoa*/
    $pessoa = array();
    $pessoa["nome"] = $nome;
    $pessoa["sexo"] = $sexo;
    $pessoa["aceito"] = $aceito;
    $pessoa["estado"] = $estado;
    $pessoa["observacoes"] = $observacoes;
    /*Fim - Preencher o cadastro da pessoa*/
    
    
    array_push($_SESSION["cadastros"], $pessoa);
    
    echo "Cadastro efetuado com sucesso!";
   
?>
