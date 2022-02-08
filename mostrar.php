
<?php
include('bd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    
    
    <title>Tabla de datos</title>
</head>
<body>
  
  <div>
  <header class="enca"> 
    <div class="wrap"> 
        <div class="logos"> 
        Universidad de Córdoba
        </div>
        <nav> 
            <a href="index.html">Inicio</a>
            <a href="mostrar.php">Tabla</a>
            
        </nav>
    </div>
</header>


<div class="espacio-tabla">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Número de acta</th>
      <th scope="col">Lugar</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora de inicio</th>
      <th scope="col">Hora de fin</th>
      <th scope="col">Convocador</th>
      <th scope="col">Tematica</th>
      <th scope="col">ID</th>
    </tr>
  </thead>
  <tbody>

<?php

    $sql="SELECT * FROM personal";
    $result = mysqli_query($conexion, $sql);

    while($mostrar = mysqli_fetch_array($result)){

   
?>

    <tr>
       <td><?php echo $mostrar['Número de acta'] ?></th>
       <td><?php echo $mostrar['Lugar'] ?></th>
       <td><?php echo $mostrar['Fecha'] ?></th>
       <td><?php echo $mostrar['HoraI'] ?></th>
       <td><?php echo $mostrar['HoraF'] ?></th>
       <td><?php echo $mostrar['Convocador'] ?></th>
       <td><?php echo $mostrar['Tematica'] ?></th>
    
     <td>


<form action="eliminar.php" method="post">
          <input type="text" value="<?php echo $mostrar['ID']?>" name="txtID"readonly>
          <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
        </form>
       </td>
       <td>


    
       </td>
     

    </tr>
    <?php
 }
    ?>
  </tbody>
</table>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>