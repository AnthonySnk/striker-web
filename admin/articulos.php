<!DOCTYPE html>
<html lang="es">
<head>
<title>Fotos</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.ccs">
   

<script src="jquery.js"></script>
</head>
<body>
<form action="detalle.php" method="post">
<ul class="galeria">
      <li class="galeria__item" ><img src="articulos/1/1.jpg"  id="1" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="1">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/2/1.jpg"  id="2" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="2">Ver Producto</button></li>
	  <li class="galeria__item" ><img src="articulos/3/1.jpg"  id="3" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="3">Ver Producto</button></li>
	  <li class="galeria__item" ><img src="articulos/4/1.jpg"  id="4" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="4">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/5/1.jpg"  id="5" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="5">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/6/1.jpg"  id="6" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="6">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/7/1.jpg"  id="7" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="7">Ver Producto</button></li>
	  <li class="galeria__item" ><img src="articulos/8/1.jpg"  id="8" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="8">Ver Producto</button></li>
	  <li class="galeria__item" ><img src="articulos/9/1.jpg"  id="9" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="9">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/10/1.jpg"  id="10" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="10">Ver Producto</button></li>
      <li class="galeria__item" ><img src="articulos/11/1.jpg"  id="11" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="11">Ver Producto</button></li>
	  <li class="galeria__item" ><img src="articulos/12/1.jpg"  id="12" class="galeria__img"><button type="submit" class="btn btn-primary btn-lg btn-block" name="art" value="12">Ver Producto</button></li>
	  
    
    


      
    
    </ul>
    </form>
    
    <?php 
     error_reporting(0);
$art=$_POST["art"];
    echo $art;
    ?>
    
    
    
<script src="modal.js"></script>
</body>

</html>