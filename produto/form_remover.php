<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite o código do produto para remover: </label>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />
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
                echo "[$id] => " . $item["nome"] . "<br/>";
            }
        }    
    }
    else{
        echo "Não existem produtos cadastrados";
    }
?>
