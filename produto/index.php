<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_REQUEST["produtos"])){
        $produtos = $_SESSION["produtos"];
        
        
        echo "<dl>";
        foreach($produtos as $item){
            $nome = $item["nome"];
            $produtoNovo = $item["produtoNovo"];
            $cor = $item["cor"];
            $observacoes = $item["observacoes"];
            
            if($item != null){
                echo "<dt>Nome: " . $item["nome"] . "</dt>";
                echo "<dd>Produto Novo: " . $produtoNovo . "</dd>";
                echo "<dd>Cor: " . $cor . "</dd>";
                echo "<dd>Aceita o produto: ";
                
                if($produtoNovo){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
            }
        }
        echo "</dl>";
    }
    else{
        echo "Não existem produtos cadastrados";
    }

?>
