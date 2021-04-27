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
  <form action="sueter.php" method="post">
       
           <div class="form-group">
    <label for="exampleFormControlSelect1">Color</label>
    <select name="color" class="form-control" id="exampleFormControlSelect1">
      <option value="1">Azul</option>
      <option value="2">GriS</option>
      <option value="3">Negro</option>
    </select>
  </div>
  
     <div class="form-group">
    <label for="exampleFormControlSelect1">Estilo</label>
    <select name="estilo" class="form-control" id="exampleFormControlSelect1"  >
      <option value="1.jpg">Estilo 1</option>
      <option value="2.jpg">Estilo 2</option>
      <option value="3.jpg">Estilo 3</option>
      <option value="4.jpg">Estilo 4</option>
      <option value="5.jpg">Estilo 5</option>
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
           <div class="form-group">
    <label for="exampleFormControlSelect1">ETILO</label>
    <select name="gorro" class="form-control" id="exampleFormControlSelect1"  >
      <option value="2">Sin Gorro</option>
      <option value="1">Con Gorro</option>
      
    </select>
  </div>
    
      <button type="submit" class="btn btn-success" >ver</button> 
     </form>
     </div>
<?php 
     error_reporting(0);
$estilo=$_POST["estilo"];
$color=$_POST["color"];
$gorro=$_POST["gorro"];
$tipo=$_POST["tipo"];
$precio="19";
     $img=$_POST["imagen"];

     if ($gorro==1)
{ 
    $g="✔";
     $precio=$precio+5;
  switch ($color) {
    case 1:
          $col="Azul1";
             
        break;
    case 2:
          $col="Gris1";
               
        break;
    case 3:
        $col="Negro1";                
        break;
   }
        
}
else
{
$g="X";
   
    switch ($color) {
    case 1:
            $col="Azul";
            
        break;
    case 2:
            
            $col="Gris";
               
        break;
    case 3:
        $col="Negro";
                  
        break;
   }
       
}
     if ($tipo==1){
         $logo=$estilo;
}
     else{
         
         
       $logo=$img;
         
     }
?>
     <div class="dv2">
    <table class="table">
  <thead>
    <tr>
       
      <th>Existencia</th>
      <th>Color</th>
      <th>Gorro</th>
      <th>Estilo</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         
       <th scope="row"> ✔</th>     
      <td> <?php echo $col;?> </td>
      <th scope="row"> <?php echo $g;?> </th>
      <td> Predeterminado </td>
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
	background-image: url(img/<?php echo $col;?>.jpg);

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