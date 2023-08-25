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
</head>
<body>
  <?php require_once("views/layouts/navbar.php");?>
  <main>
    <header >
      <h1 class="text-center">Listado de Contacto</h1>
    </header>
<div class="table-responsive px-5 ">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">FECHA DE CONTACTO</th>
            <th scope="col">NOMBRE Y APELLIDOS</th>
            <th scope="col">CORREO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">MENSAJE</th>
            <th scope="col">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include "core/conexion.php";
        //Paginador
        $sql_registe = mysqli_query($conn,"SELECT COUNT(*) as total_registro FROM contactanos WHERE estado = 1");
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

        $query = mysqli_query($conn,"SELECT * FROM contactanos 
                                     WHERE estado = 1
                                     ORDER BY codigo 
                                     ASC LIMIT $desde,$por_pagina");

        mysqli_close($conn);

        $result = mysqli_num_rows($query);
        if($result > 0){

          while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td scope="row"><?php echo $data['codigo']?></td>
            <td><?php echo $data['fechaContacto']?></td>
            <td><?php echo $data['nomApe']?></td>
            <td><?php echo $data['correo']?></td>
            <td><?php echo $data['telf']?></td>
            <td><textarea class="msg" disabled><?php echo $data['msg']?></textarea></td>
            <td style="text-align: center">
              <form action="atendidoContactanos" method="POST">
                <input type="hidden" name="codigoId" value="<?php echo $data ['codigo']?>">
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea dar por terminado el contacto?');">Resuelta</button>
              </form>
            </td>
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