    
<!DOCTYPE html>
<html lang="es">
<head>
<title>Fotos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/divs.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
<script src="jquery.js"></script>
</head>
<body>

    <div class="dv0"></div>
    <div class="dv1">  <?php 
     error_reporting(0);
$art=$_POST["art"];
    
    ?>
  
        <div id="contenedor-slider" class="contenedor-slider">
 <div id="slider" class="slider">
    <section class="slider__section"><img src="articulos/<?php echo $art;?>/1.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="articulos/<?php echo $art;?>/2.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="articulos/<?php echo $art;?>/3.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="articulos/<?php echo $art;?>/4.jpg" class="slider__img"></section>
  </div>
  <div id="btn-prev" class="btn-prev">&#60;</div>
  <div id="btn-next" class="btn-next">&#62;</div>
 </div>
    </div>
    <div class="dv2"><form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" class="col-form-label">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-form-label">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Direccion 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" class="col-form-label">Estado</label>
       <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" class="col-form-label">código postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Enviar Facturacion
      </label>
    </div>
  </div>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estado de Compra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Su Compra se a realizado correctamente..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a class="btn btn-primary" href="articulos.php" role="button">Volver a catalogo</a>
      </div>
    </div>
  </div>
</div>
</form>
    
    </div>
    <div class="dv3"></div>
    
    
    
    
    
    </body>
    <script src="sl.js"></script>
</html>
