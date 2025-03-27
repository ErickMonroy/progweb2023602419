<?php
ini_set ("display_errors", E_ALL);
  include_once "personas.php";

  $lista = [
     new Persona ("Fulano", "1969-11-02", "5558384173"), 
     new Persona ("Luis", "1967-12-08", "5558381473"), 
     new Persona ("Alfredo", "1972-11-09", "5553484173"), 
     new Persona ("Ricardo", "1970-10-12", "5559684173"), 
     new Persona ("Abigail", "1967-11-07", "5557284173"), 
     new Persona ("Brenda", "1975-09-02", "5558321173"), 
     new Persona ("Valeria", "1980-10-02", "5558124173"), 
     new Persona ("Andrea", "1986-10-05", "5558384183"), 
     new Persona ("Elizabeth", "1971-04-02", "5554384173"), 
     new Persona ("Michelle", "1969-06-02", "5558374173"), 
  ];
  //echo "todo bien";
  function Edad($fecNac) {
    $nacimiento = new DateTime($fecNac);
    $hoy = new DateTime();
    $diferencia = $hoy->diff($nacimiento);
    return $diferencia->y." años";
}

?>

<!DOCTYPE html>
<html>
  <head>
<!--Meta es para que no aparezcan caracteres raros si se meten acentos-->
    <meta charset="utf-8">
    <title>lista de personas</title>
  </head>
  <body>
  <h1>Lista de personas</h1>
  <table border>
  <thead>
    <tr>
     <th>Nombre</th> 
     <th>Fecha Nacimiento</th> 
     <th>Edad</th>
     <th>Telefono</th> 
    </tr>
  </thead>
  <tbody>
    

    <?php foreach ($lista as $p): ?>
    <tr>
    <td><?php echo $p->getNombre()?></td> 
     <td><?php echo $p->getFecNac()?></td> 
     <td><?php echo Edad($p->getFecNac()); ?></td>
     <td><?php echo $p->getTel()?></td> 
    </tr>
    <?php endforeach ?>


  </tbody> 
  </table>
</body>
</html>