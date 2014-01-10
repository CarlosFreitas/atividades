<style>
    .m{
        color: #0000FF;
        font-family: Arial, Helvetica, sans-serif;
    }
    .f{
        color: #FF0000;
        font-family: Arial, Helvetica, sans-serif;
    }
    
</style>

<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $estado = $pessoa["estado"];
            
            
            if($pessoa != null){
                echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                echo "<dd>Sexo: " . $sexo . "</dd>";
                echo "<dd>Estado: " . $estado . "</dd>";
                echo "<dd>Aceita o contrato: ";
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
            }
        }
        echo"</dl>";
    }
    else{
        echo "Não existem pessoas cadastradas";
    }

?>
