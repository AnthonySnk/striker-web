<html>
  <head>
     <title>Mostrar datos de la tabla de datos con MySQL</title>
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
          <link rel="stylesheet" type="text/css" href="css/divs.css">
  </head>
    
 <body >
	    <div class="dv0"></div>
    <div class="dv1">
  <form action="blusas.php" method="post">
       
           <div class="form-group">
    <label for="exampleFormControlSelect1">Blusa</label>
    <select name="color" class="form-control" id="exampleFormControlSelect1">
      <option value="1">Verde</option>
      <option value="2">Amarillo</option>
      <option value="3">Blaco</option>
      <option value="4">Azul</option>
      <option value="5">GriS</option>
    </select>
  </div>
  
     <div class="form-group">
    <label for="exampleFormControlSelect1">Estilo</label>
    <select name="estilo" class="form-control" id="exampleFormControlSelect1"  >
      <option value="1">Estilo 1</option>
      <option value="2">Estilo 2</option>
      <option value="3">Estilo 3</option>
      <option value="4">Estilo 4</option>
      <option value="5">Estilo 5</option>
    </select>
  </div>
    
 <div class="form-group">
    <label for="exampleFormControlFile1">Seleccione imagen personalizada</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
  </div>

            <div class="form-group">
    <label for="exampleFormControlSelect1">DEFINIR ESTILO</label>
    <select name="tipo" class="form-control" id="exampleFormControlSelect1"  >
      <option value="1">Predeterminado</option>
      <option value="2">Personalizado</option>
      
    </select>
  </div>
    
      <button type="submit" class="btn btn-success" >ver</button> 
     </form>
     </div>
<?php 
     error_reporting(0);
$estilo=$_POST["estilo"];
$color=$_POST["color"];
$tipo=$_POST["tipo"];
$precio="9";
$img=$_POST["imagen"];

  
     
  switch ($color) {
    case 1:
          $color="verde";
          $col="blusa1";
             
        break;
    case 2:
          $color="Amarillo";
          $col="blusa2";
               
        break;
    case 3:
          $color="Blanco";
        $col="blusa3";                
        break;
               break;
    case 4:
        $color="Azul";
          $col="blusa4";                
        break;
               break;
    case 5:
        $color="Gris";  
        $col="blusa5";                
        break;
   }
        


     if ($tipo==1){
         switch($estilo){
                 case 1:  
                       $logo="6.jpg";
                 break;
                  case 2:  
                       $logo="7.jpg";
                 break;
                  case 3:  
                       $logo="8.jpg";
                 break;
                  case 4:  
                       $logo="9.jpg";
                 break;
                  case 5:  
                       $logo="10.jpg";
                 break;
                 
         }
          $g="X";
}
     else{
         
        $g="✔"; 
       $logo=$img;
         $precio=$precio+5;
         
     }
?>
     <div class="dv2">
    <table class="table">
  <thead>
    <tr>
       
      <th>Existencia</th>
      <th>Color</th>
      <th>Personalizado</th>
      <th>Estilo</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         
       <th scope="row"> ✔</th>     
      <td> <?php echo $color;?> </td>
      <th scope="row"><?php echo $g;?> </th>
      <td> Estilo <?php echo $estilo;?> </td>
      <td> $<?php echo $precio;?>.99 </td>
    </tr>
  </tbody>
</table> 
    <style type="text/css">
        
        
.div0{
  width: 60%;
	height: 90%;
    margin-left: 20%;
    background-position:center;
    text-align:center;
	background-size:100% 100%;
	background-image: url(blusas/<?php echo $col;?>.jpg);

    }
           .div10{
    width: 20%;
	height: 30%;
    background-position:center;
	background-size:100% 100%;

    margin:0px auto; 
   
    }
    .div00{
    width: 30%;
	height: 30%;
    background-position:center;
	background-size:100% 100%;
	background-image: url(imagen/<?php echo $logo;?>);
    margin:0px auto; 
   
    }
</style>
         <div class="div0" > <div class="div10"></div><div class="div00"></div></div>
     
     </div> 
</body>

</html>