<?php
$valor=30;
$valor1=-2;
$variable;

if (!($valor > 0) || $valor1 > 0){
    //verdadeiro
    
    echo "verdadeiro";
}else{
    //falso
    
    echo "falso";
}


/*switch ($variable){
    case 'A';
    #code..
    break;
    
    case 'B';
    #code..
    break;
    
    case 'C';
    #code..
    break;
    
    default;
    }*/
    
    while ($valor>10){
        $valor -= 2;
        echo "<br>Valor: ".$valor;
    }   
    
    $i = 0;
    
    for ($i = 0; $i < 10; $i+=2){
        echo "<br>valor de i: ".$i;
    }
    
?>