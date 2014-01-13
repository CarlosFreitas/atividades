<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["produtos"])){
        echo "Não existem pessoas para remover";
    }
    else{
        $id = $_REQUEST["id"];
        
        $produtos =& $_SESSION["produtos"];
        $produtos[$id] = null;
        
        
        echo "Remoção efetuada com sucesso";
    }
        
?>
