<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o código do produto para editar: </label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Digite o novo nome do produto: </label>
            <br/>
            <?php require_once("campos_produtos.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["produtos"])){
        
        $produtos = $_SESSION["produtos"];
        
        foreach($produtos as $id => $item){
            if($item != null){
            echo "[$id] => " . $item["nome"] .  "<br/>";
            }
        }
    }
    else{
        echo "Não existem produtos cadastrados";
    }
