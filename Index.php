<?php
function chicharronera($a, $b, $c){
    $raices = [];
    $raices[0] = (-$b+sqrt(pow($b,2)-4*$a*$c)) / (2*$a);
    $raices[1] = (-$b-sqrt(pow($b,2)-4*$a*$c)) / (2*$a);
    return $raices;
}
?>
<html>
    <head>
        <title>Mis paginas en PHP</title>
    </head>
    <body>
        <h1>Ecuación de segundo grado</h1>
        <p>Forma: ax<sup>2</sup> +bx + c = 0</p>
        <P>Ecuación: <b>1</b>x<sup>2</sup> + <b>5</b>x +<b>6</b> = 0 </p>
        <p>Raices:</p>
        <p>x<sub>1</sub> = <?php echo chicharronera(1,5,6)[0]; ?></p>
        <p>x<sub>2</sub> = <?php echo chicharronera(1,5,6)[1]; ?></p>
    </body>
</html>