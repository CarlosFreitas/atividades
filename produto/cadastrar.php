<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["produtos"])){
        echo "Não existem pessoas cadastradas";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $cor = $_REQUEST["cor"];
        $observacoes = $_REQUEST["observacoes"];
        
        $produtoNovo = false;
        if(isset($_REQUEST["aceito"])){
            $produtoNovo = true;
        }
        
        $item = array();
        $item["nome"] = $nome;
        $item["cor"] = $cor;
        $item["produtoNovo"] = $produtoNovo;
        $item["observacoes"] = $observacoes;
        
        $produtos =& $_SESSION["produtos"];
        $produtos = $item;
        
        echo "Cadastro efetuado com sucesso";
    }    
?>
