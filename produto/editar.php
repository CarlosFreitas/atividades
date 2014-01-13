<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["produtos"])){
        "Não existem pessoas para editar";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $produtoNovo = $_REQUEST["produtoNovo"];
        $cor = $_REQUEST["cor"];
        $observacoes = $_REQUEST["observacoes"];
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
            $aceito = true;
        }    
        
        $item = array();
        $item["nome"] = $nome;
        $item["produtoNovo"] = $produtoNovo;
        $item["cor"] = $cor;
        $item["observacoes"] = $observacoes;
        
        $produtos =& $_SESSION["produtos"];
        $produtos[$id] = $item;
        
        echo "Edição efetuada com sucesso!";
        echo "<br/>";
        echo "Cadastro efetuado com sucesso";
    }    
?>
