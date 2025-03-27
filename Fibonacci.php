<?php 

$A = 0;  
$B = 0;  
$C = 1; 
$i = 1;  

echo "<h2>Sucesión de Fibonacci hasta 2048 números</h2>";

while ($i<=2048) { 
    echo sprintf("%.0f", $A) . ","."<br>"."<br>"; 
    $B = $C;
    $C = $A; 
    $A = $B + $C; 
    $i++; 
}
?>  

<html>
    <head>
        <title>Tarea sucesión de Fibonacci</title>
    </head>
    <body>
    
    </body>
</html>
