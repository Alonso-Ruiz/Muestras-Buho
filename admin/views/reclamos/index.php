<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/consultas.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>
<body>
  <?php require_once("views/layouts/navbar.php");?>
  <main>
    <header>
      <h1 class="text-center" >Listado de Reclamos</h1>
    </header>
<div class="table-responsive px-5 ">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
            <th scope="col">NUMERO DE RECLAMO</th>
            <th scope="col">FECHA DEL INCIDENTE </th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">DIRECCION DEL DOMICILIO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">CORREO ELECTRONICO</th>
            <th scope="col">PETICION</th>
            <th scope="col">ACCION</th>
            <th scope="col">DETALLES</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include "core/conexion.php";
        //Paginador
        $sql_registe = mysqli_query($conn,"SELECT COUNT(*) as total_registro FROM reclamo
          ");
        $result_register = mysqli_fetch_array($sql_registe);
        $total_registro = $result_register['total_registro'];

        $por_pagina = 5;

        if(empty($_GET['pagina']))
        {
          $pagina = 1;
        }else{
          $pagina = $_GET['pagina'];
        }

        $desde = ($pagina-1) * $por_pagina;
        $total_paginas = ceil($total_registro / $por_pagina);

        $query = mysqli_query($conn,"SELECT * FROM reclamo 
                                     ORDER BY idReclamo 
                                     ASC LIMIT $desde,$por_pagina");

        mysqli_close($conn);

        $result = mysqli_num_rows($query);
        if($result > 0){

          while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>

            <td scope="row"><?php echo $data['idReclamo']?></td>
            <td><?php echo $data['fecIncidente']?></td>
            <td><?php echo $data['nombres']?></td>
            <td><?php echo $data['apellidos']?></td>
            <td><?php echo $data['direccion']?></td>
            <td><?php echo $data['telefono']?></td>
            <td><?php echo $data['correo']?></td>
            <td><?php echo $data['peticion']?></td>
            
            <td style="text-align: center">
              <form action="atendidoReclamos" method="POST">
                <input type="hidden" name="idReclamo" value="<?php echo $data ['idReclamo']?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea dar por terminado el reclamo?');">Atendido</button>
              </form>
            </td>
            
            <td style="text-align: center"><a class="btn btn-primary" href="views/reclamos/mimodal.php?Id=<?php echo $data["idReclamo"]?>"><i class="glyphicon glyphicon-search"></i></a></td>                          
          </tr>
        <?php 
          } 
        }?>
      </tbody>
    </table>
  </div>
    
    <div class="paginador">
			<ul>
 
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>