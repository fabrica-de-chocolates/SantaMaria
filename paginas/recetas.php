<!DOCTYPE html>
<?php
    include("../clases/receta.php")  ;
     $datos=array('cnombre'=>'', 'cingrediente'=>'','creceta'=>'','iidreceta'=>'');      
      $accion='insert';
      include("enlacesreceta.php");

     

?>
<html lang="es">
<head>
  <title>Inicio/Santa María</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/estilo.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!--  Scripts-->
  <script src="../js/jquery.js"></script>
  <script src="../js/funciones.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/init.js"></script>

  <script type="text/javascript">


  $(document).ready(function() {
    $('select').material_select();

        $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
      });
  // START OPEN
    $('.button-collapse').sideNav();
      });
     
  </script>

  <style type="text/css">
.wrapper {
    padding-left: 300px;
}
</style>

</head>
<body>

  <nav>
    <div class="nav-wrapper brown lighten-1 z-depth-4">
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

      <script language="JavaScript" type="text/javascript">
        today = new Date()
        if(today.getMinutes() < 10){
          pad = "0"}
        else
          pad = "";
          document.write ;if((today.getHours() >=6) && (today.getHours() <=9)){
          document.write("¡Buenos días!")
          }
          if((today.getHours() >=10) && (today.getHours() <=11)){
          document.write("¡Buenos días!")
          }
          if((today.getHours() >=12) && (today.getHours() <=19)){
          document.write("¡Buenas tardes!")
          }
          if((today.getHours() >=20) && (today.getHours() <=23)){
          document.write("¡Buenas noches!")
          }
          if((today.getHours() >=0) && (today.getHours() <=3)){
          document.write("¡Buenas noches!")
          }
          if((today.getHours() >=4) && (today.getHours() <=5)){
          document.write("¡Buenas noches!")
          }
      </script>
      
      <ul class="side-nav grey darken-2" id="mobile-demo">
        <li class="sidenav-header brown">
          <div class="row">
            <div class="col s4">
                <img src="../imagenes/user1.png" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8"><H5><center>Bienvenido al Sistema</center></H5>
            </div>
          </div>
        </li>
        
        <li class="white"><a href="../inicio.php" class="waves-effect waves-blue"><i class="material-icons">home</i>Inicio</a></li>
        <li class="white"><a href="agregar.php" class="waves-effect waves-blue"><i class="material-icons">Add</i>Chocolates</a></li>
        <li class="white"><a href="recetas.php" class="waves-effect waves-blue"><i class="material-icons">note</i>Recetas</a></li>
      </ul>
      
    </div>
  </nav>

 

  <div class="container">
	<div class="row">
    <form class="col s12" name="receta" method="post" action="recupereceta.php">

      <div class="row">
        <label><H5>Agregar Receta</H5></label>
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="cnombre" value="<?php echo $datos['cnombre'];?>" type="text" class="validate" placeholder="Nombre(s)" required>
        </div>

        </div>

        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
            <input value="<?php echo $datos['cingrediente'];?>"class="materialize-textarea" name="cingrediente" placeholder ="Ingredientes"required>
       
        </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
            <input value="<?php echo $datos['creceta'];?>"class="materialize-textarea" name="creceta"placeholder ="Receta"required>
       
        </div>
        </div>


      <input type="hidden" name="iidreceta" value="<?php echo $datos['iidreceta'];?>">
      <input type="hidden" name="accion" value="<?php echo $accion;?>">
      <button class="btn waves-effect brown lighten-1" type="submit" value="Guardar"name="enviar">Guardar
      </button>
    </form>
  </div>

  <?php include("tablereceta.php");?>
</div>

  <footer class="footer-copyright">
    </div>
  </footer>
  </body>
</html>