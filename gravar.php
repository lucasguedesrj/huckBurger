<?php  
    
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $pao = $_POST['pao'];
    $carne = $_POST['carne'];
    $queijo = $_POST['queijo'];
    $desc = $_POST['desc'];
    
    /*
    echo $nome . "<br>";
    echo $tel . "<br>";
    echo $pao . "<br>";
    echo $carne . "<br>";
    echo $queijo . "<br>";
    echo $desc . "<br>"; 
    */
    


    if($nome <> null && $tel <> null && $pao <> null && $carne <> null && $queijo <> null){
    
    include "connect.php";


    $sql = "INSERT INTO pedidos VALUES(null, '{$nome}', '{$tel}', '{$carne}', '{$pao}', '{$queijo}', '{$desc}')";


    mysqli_query($con, $sql);
        
        echo "dados gravados com sucesso";
        
        
    }else{
        
        echo "erro ao gravar";
        
    }
       
?>