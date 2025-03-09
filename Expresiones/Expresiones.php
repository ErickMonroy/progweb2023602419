<?php
  function suma($x, $y) {
    return $x + $y;
  }
  #a)
  $x = 2;
  $y = 4;
  $a = (1/$x) + ($x+$y)/3 + 2*($x/$y);

  #b)
  $b = 3;
  $c = ((0.5*$b) + ((3+$b)/2) * (2*pow($b,2)))/((2 + 3)*$b);

  #c)
  $d = 2;
  $e = (pow((pow((2*$d), 2) + pow(3,2)), 0.5)/5) + pow(pow($d, 2), 0.5);

  #d)
  $f = 2;
  $g = ((0.5+0.25+0.125)*(pow($f, 1/3)))/((sqrt($f)/2)+(3*(pow($f, 2))/4));

  #e)
  $h = 4;
  $i = pow((pow($h, 2)/2 + 1/(sqrt($h))) / (3+ 0.5*pow($h,3)), 0.5);
?>
<html>
    <head><title>Expresiones</title>
    </head>
    <body>
    <p><?php echo "Expresiones"?><br><?php echo "Nombre:Monroy Santana Erick Daniel"?></p>
      <!--Impresion de a)-->
       <p><?php echo "a) Para x=2 y=4"?><br><img src="img/Imagen1.png" alt="Imagen1"> <?php echo "Res="?><?php echo $a?></p>

       <!--Impresion de b)-->
       <p><?php echo "b) Si x=3"?><br><img src="img/Imagen2.png" alt="Imagen2"> <?php echo "Res="?><?php echo $c?></p>

       <!--Impresion de c)-->
       <p><?php echo "c) Si x=2"?><br><img src="img/Imagen3.png" alt="Imagen3"> <?php echo "Res="?><?php echo $e?></p>

       <!--Impresion de d)-->
       <p><?php echo "d) Si x=2"?><br><img src="img/Imagen4.png" alt="Imagen4"> <?php echo "Res="?><?php echo $g?></p>

       <!--Impresion de e)-->
       <p><?php echo "e) Si x=4"?><br><img src="img/Imagen5.png" alt="Imagen5"> <?php echo "Res="?><?php echo $i?></p>
    </body>
</html>
