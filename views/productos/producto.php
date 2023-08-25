
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="En Yuntas Producciones te brindamos nuevas experiencias para publicitar tu negocio. Ventas de Luces,Letreros y Pantallas LED .">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Bungee&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="stylesheet" href="public/css/productos.css" >

    <title><?= $producto['slug'] ?></title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <?php require_once("views/layouts/enlaces.php") ?>
  </head>
  <body>
    <?php	require_once("views/layouts/navbar.php");?>




<style>
 .modal-content {
  background-color: rgba(0, 0, 0, 0.7) !important; 
  border: none !important;
  border-radius: 10px !important;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3), 0px 0px 40px rgba(0, 0, 0, 0.1) !important;
  padding: 30px !important;
  position: relative !important;
  text-align: center !important;
  color: #fff !important;
  font-weight: bold !important;
  font-size: 20px !important;
}

.modal-header {
  border: none !important;
}

.modal-title {
  color: #fff !important;
  font-size: 30px !important;
}

.form-label {
  font-size: 24px !important;
  color: #fff !important;
}

.form-cont {
  background-color: rgba(0, 0, 0, 0.5) !important;
  border: none !important;
  border-radius: 10px !important;
  color: #fff !important;
  font-size: 18px !important;
  margin-bottom: 20px !important;
  padding: 15px !important;
  border-bottom: 1px solid #ffffff !important;
}

.form-cont:focus {
  box-shadow: none !important;
}

.btn-primari {
  background-color: #21c7c2 !important;
  border: none !important;
  display: block !important;
  margin: 0 auto !important;
  border-radius: 30px !important;
  color: #fff !important;
  font-size: 20px !important;
  font-weight: bold !important;
  padding: 15px 50px !important;
  text-transform: uppercase !important;
  transition: 0.5s ease-in-out !important;
}

.btn-primari:hover {
  display: block !important;
  margin: 0 auto !important;
  background-color: #fff !important;
  color: #21c7c2 !important;
  box-shadow: 0px 0px 20px #21c7c2 !important;
}

.btn-close {
  position: absolute !important; 
  right: 0 !important;
  top: 0 !important;
}

.btn-close:hover {
  color: #21c7c2 !important;
  cursor: pointer !important;
}

.modal-footer {
  border: none !important;
  margin-top: 30px !important;
  position: relative !important;
}

.modal-footer::before {
  background: linear-gradient(90deg, #00d2ff, #3a7bd5, #00d2ff) !important;
  content: "" !important;
  height: 4px !important;
  position: absolute !important;
  top: -4px !important;
  width: 100% !important;
}

.modal-footer::after {
  background: linear-gradient(90deg, #00d2ff, #3a7bd5, #00d2ff) !important;
  content: "" !important;
  height: 4px !important;
  position: absolute !important;
  bottom: -4px !important;
  width: 100% !important;
}

@media (max-width: 576px) {
  .modal-content {
    padding: 15px !important;
  }

  .form-label {
    font-size: 18px !important;
  }

  .form-cont {
    font-size: 16px !important;
    margin-bottom: 10px !important;
    padding: 10px !important;
  }

  .btn-primari {
    font-size: 18px !important;
    padding: 10px 30px !important;
  }

  .btn-close {
    font-size: 30px !important;
  }
}


  </style>
  
 <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Formulario de contacto</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form action="enviarEmergente" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nom" type="text" class="form-cont form-control " id="inputNombre">
          </div>
          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input name="ape" type="text" class="form-cont form-control" id="inputApellido">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="correo" type="text" class="form-cont form-control" id="inputCorreo">
          </div>
          <div class="mb-3">
            <label for="Celular" class="form-label">Celular</label>
            <input name="cel" type="text" class="form-cont form-control" id="inputCelular" >
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primari" data-bs-dismiss="modal" >Enviar</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
 $(document).ready(function() {
  // Verificar si el formulario ya fue enviado
  if (sessionStorage.getItem('formularioEnviado')) {
    return;
  }

  $('#myModal').modal('show');

  $('#formulario').on('submit', function(e) {
    e.preventDefault();

    // Validar los campos
    var nombre = $('#inputNombre').val();
    var apellidos = $('#inputApellido').val();
    var email = $('#inputCorreo').val();
    var celular = $('#inputCelular').val();

    if (!nombre || !apellidos || !email || !celular) {
      swal('Error', 'Por favor complete todos los campos', 'error');
    } else {
      // Enviar los datos del formulario
      $.ajax({
        url: 'enviar.php',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          // Configurar la variable de sesi車n
          sessionStorage.setItem('formularioEnviado', true);

          // Ocultar el modal
          $('#myModal').modal('hide');

          swal('Gracias!', 'Tu mensaje ha sido enviado', 'success');
        },
        error: function() {
          swal('Error', 'Ocurrio un error al enviar el mensaje', 'error');
        }
      });
    }
  });
});

</script>

<?php
if ($producto['slug'] == 'Pantalla Led') {
  $caracteristicas = array(
    'Tiene un sistema de retroalimentación basado en leds, por lo que es más eficiente energéticamente',
    'Con respecto al tamaño se puede personalizar',
    'Compuesto por diodos emisores de luz led',
    'Los paneles cuentan con LCD, pero utilizando tecnología LED como fuente de iluminación',
    'La pantalla led es apta para mostrarse bajo la luz solar directa como también en espacios al interior.',
    'Brillo de alto impacto',

   
  );
  $beneficios = array(
    'Se puede plasmar una variedad de contenidos al público',
    'Los espectadores puedan ser partícipes de la experiencia audiovisual sin perderse nada',
    ' Ofrece una calidad de imagen y gran resolución de imágenes',
    
  );
} elseif ($producto['slug'] == 'Letreros neón led') {
  $caracteristicas = array(
    'Está hecho de material de acrílico (como panel trasero + tira de PVC).',
    'Es personalizable por ende se puede cambiar los colores, tamaños, fuente, frases, diseños,etc. ',
    'Es muy resistente a los golpes, vibraciones, agua, polvo, etc.', 
    'Iluminación con Neón LED Flexible RGB espesor 5mm',
    'Consumo de energía: 30v',
    'No se puede recalentar los letreros neón led, tampoco a la hora de su funcionamiento tiene algún ruido.'
    
  );
  $beneficios = array(
    'Decoración perfecta para recrear e iluminar ambientes muy variados',
    'Emana un brillo de alto impacto',
    'Su eficiencia económica le permite consumir menos luz, con una eficiencia igual a la del neón convencional',
    
  );
} elseif ($producto['slug'] == 'Paneles electronicos Led') {
  $caracteristicas = array(
    'Diseño personalizado: los letreros de neón LED personalizados se pueden diseñar en cualquier forma o tamaño para satisfacer sus necesidades. Puede elegir sus propios diseños, fuente, tamaño y colores. Por lo tanto, usted dictará cómo quiere que se vea su letrero.',
    'Duradero y de larga duración: los letreros de neón personalizados están hechos de materiales de la más alta calidad, por lo que puede estar seguro de que durarán mucho tiempo.',
    'Fácil de instalar: los letreros de neón también son fáciles de instalar porque tienen clips o perfiles para colocarlos fácilmente en la pared. No necesita ninguna herramienta o habilidad especial para instalar estos letreros, ya que vienen con todo el hardware necesario para la instalación.', 
    'Flexible: Los letreros de neón LED personalizados están hechos de tubos de neón livianos, que se pueden doblar y curvar para adaptarse a sus necesidades. Esto es imposible, con letreros rígidos que requieren una superficie plana para instalar.',
    'A prueba de la intemperie: Los letreros de neón LED personalizados se fabrican con materiales de alta calidad resistentes a la intemperie y al daño de los rayos UV. Están estabilizados contra los rayos UV para garantizar que duren muchos años sin decolorarse ni agrietarse.Se pueden usar en áreas al aire libre porque son resistentes a la intemperie. A diferencia de otros letreros, los letreros de neón no se ensucian fácilmente.',

  );
  $beneficios = array(
    'Mayor ahorro energético, hasta un 70% de ahorro en energía. En los tiempos que corren cualquier alivio al bolsillo es bueno.',
    'Mayor estabilidad y brillo en la iluminación, por lo que el efecto logrado es más impactante.',
    'Mayor resistencia a roturas, el vidrio es un material delicado, el PVC es más resistente',
        'Nula emisión de calor, no se calienta por lo que al colocarlo en interior no sube la temperatura del local.',
            'Mayor sostenibilidad del material. El neón led es mucho menos contaminante que el tradicional neón.',
            'Personalización: puede personalizar su letrero de neón para que se ajuste a su marca, industria o incluso al tema de su evento. Esto le facilita la promoción de su negocio o evento sin tener que comprar muchos letreros de diferentes empresas. En su lugar, puede solicitar un solo letrero que mostrará toda la información que necesita sobre su negocio o evento en un solo lugar.',
    
  );
} elseif ($producto['slug'] == 'Ventilador holográfico') {
  $caracteristicas = array(
    'Diseño mejorado Version 2,0, versión Wifi de computadora.',
'Compatible con software: la aplicación del teléfono es compatible con iOS y Android. Holo50S Hologram Fan Play MP4, AVI, MOV, RMVB, JPG, GIF, JEPG, MKV formato video directamente.',
'El aspa que contiene las luces LED comienza a girar a una velocidad endiablada, hasta 750 revoluciones por minuto',
'Una apps permite controlar desde el móvil qué vídeo quieres ver, la intensidad de la luz y el color, efectos especiales, etc.',
'Efecto 3D: la imagen que se muestra en la pantalla publicitaria holográfica no tiene bordes ni fondos',
'576 cuentas LED: las cuentas LED determinan la textura de la imagen, el brillo y la vida. Ventiladores de pantalla LED Holo50S con diseño de cuatro cuchillas para aumentar la cantidad de cuentas de lámpara LED, la resolución dinámica ha alcanzado 640P que crea un video de efecto 3D más claro y brillante.',
'No tiene restricciones de luminosidad  en su ubicación.', 

  );
  $beneficios = array(
    'Atrae la atención de tus clientes con un ventilador holográfico llamativo.',
    'Muestra imágenes y mensajes en 3D con gran impacto visual.',
    'Ahorra energía gracias a la tecnología LED de bajo',
  );
} elseif ($producto['slug'] == 'Cubos LED' || $producto['slug'] == 'Relojes Digitales') {
  $caracteristicas = array();
  $beneficios = array();
}
?>
    <div class="info-2 info-2-first pt-5">
      <div class="titulos2-container">  
        <h1 class="titulos2"><?= $producto['titulo'] ?></h1>
      </div>
      <p><?= $producto['resumen'] ?></p>
<div class="container ">
  <div class="row">
  <?php if (!empty($caracteristicas)) { ?>
    <div class="col-md-6 pb-5">
      <div class="card cards">
        <div class="card-body card-bodys">
          <h5 class="card-title card-titles">Caracteristicas</h5>
          <ul class="card-text card-texts">
             <?php foreach ($caracteristicas as $caracteristica) { ?>
                <li><?= $caracteristica ?></li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php if (!empty($beneficios)) { ?>

    <div class="col-md-6 pb-5">
      <div class="card cards" >
        <div class="card-body card-bodys">
          <h2 class="card-title card-titles">Beneficios</h2>
          <ul class="card-text card-texts">
          <?php foreach ($beneficios as $beneficio) { ?>
                <li><?= $beneficio ?></li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>
</div>


</div>
    <?php $style_img_info = 'width: 100%;height:308px;object-fit: cover; border-radius: 30px; border: 5px solid #2AA4BF;'?>
    <div class="info info-second">
          <?php
      $categorias = [
        ['cat' => $producto['cat1'], 'img' => $producto['img_cat1']],
        ['cat' => $producto['cat2'], 'img' => $producto['img_cat2']],
        ['cat' => $producto['cat3'], 'img' => $producto['img_cat3']],
        ['cat' => $producto['cat4'], 'img' => $producto['img_cat4']],
        ['cat' => $producto['cat5'], 'img' => $producto['img_cat5']]
      ];
      ?>

      <div class="container row d-flex justify-content-center" style="margin:auto;">
        
       <?php 
            $count = 1;
            if ($producto['slug'] == "Pantallas Led") {
              $count = 1;
            } elseif ($producto['slug'] == "Cubo Led") {
              $count = 5;
            }
            elseif ($producto['slug'] == "Ventilador hologr芍fico") {
              $count = 8;
            }
            elseif ($producto['slug'] == "Letreros ne車n led") {
              $count = 13;
            }
            elseif ($producto['slug'] == "Relojes digitales") {
              $count = 17;
            }
            elseif ($producto['slug'] == "Paneles electr車nicos Led") {
              $count = 20;
            }
            
            foreach ($categorias as $categoria): ?>
              <?php if (!empty($categoria['cat'])): ?>
            
                <div class="col-lg-4 col-md-5 col ">
                  <?php if ($producto['slug'] == "Relojes digitales" || $producto['slug'] == "Cubo Led"): ?>
                   <a href="subproductos?id=<?php echo $count; ?>">
                      <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($categoria['img']) ?>" alt="enlaces">
                      <h2 class="subtitulo2 text-truncate "><?= $categoria['cat'] ?></h2>
                    </a>
                  <?php else: ?>
                    <a>
                      <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($categoria['img']) ?>" alt="enlaces">
                      <h2 class="subtitulo2 text-truncate "><?= $categoria['cat'] ?></h2>
                    </a>
                  <?php endif; ?>
                </div>
                        
              <?php 
                $count++;
              endif; ?>
    <?php endforeach; ?>

      </div>

      
    </div>

    <?php require_once("views/productos/formulario/index.php") ?>

    <?php require_once("views/layouts/footer.php") ?>
    <?php require_once("views/layouts/enlaces.php") ?>

  </body>
</html>