<!--
ORIGINALMENTE SE LLAMABA app.php
SE LE CAMBIÓ EL NOMBRE A: index.php
-->
<?php
/*Esto significa que todos mis php van a tener
este valida
Esto nos va a permitir verificar transiciones
y que se mantengan las sesiones*/
include "valida.php";
#Con esto indicamos que esta validada esta parte

//echo "ok";
//echo "<br><br><br><br><br><br>";

//Creamos un link
//La sentencia a usar es:
//<a href = salir.php "">salir</a>
//echo '<a href = salir.php "">salir</a>';

/*Fuera de este apartado creamos el header de los elementos
creamos las referencias a BootStrap*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--creamos las referencias a BootStrap-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <link rel="stylesheet" href="css/bootstrap.css">
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet" />

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .hiddeNavBarHidde{
    display: none !important;
  }
  .hiddeNavBarShow{
    display: show !important;
  }
</style>

<!-- Custom styles for this template -->
<!--<link rel="stylesheet" href="css/estilos.css">-->
<link href="css/sidebars.css" rel="stylesheet" />
</head>
<body>

    <?php include "boton.php"; ?>
    
    <main>

    <?php include "menu.php"; ?>

    

      <div class ="container-fluid">
        <nav class="navbar navbar-expand-sm big-light navbar-light" style="background-color:rgb(16,108,252);">
          <div class="container-fluid">
            <a class="navbar-brand" href="#prueba" id="logo">Ocultar Sidebar</a>
            <div class="collapse navbar-collapse d-flex justify-content-end"><p style="font-size: 20px;"><strong>By Diego Cantarell</strong></p></div>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="minavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="salir.php"><strong>Salir</strong></a>
                  <strong></strong>
                </li>
                
            </div> 
          </div>
        </nav>     
        <div class="row">
          <class class="col text-center">   
            <img src="img/fondo.jpg" alt="fondoAgenda" style="max-width: 550px;">
          </class>
        </div>
      </div>
    </main>
    <!--Anadimos posibles elementos a colocar usando JQuery y BootStrap
    Esto por si es necesario hacer Scripts-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="sidebars.js"></script>
    <!--<script src="js/bootstrap.bundle.min.js"></script>-->
    <!--<script src="js/bootstrap.js"></script>-->
    
    <script>
      //TENGO QUE SABER SI EXISTE LA CLASE
      //SI SE QUE EXISTE, LA VOY A PONER, SI NO EXISTE, LA VOY A QUITAR
      $("#logo").click(function (){
        //CONDICIÓN PARA BUSCAR LAS CLASES
        if($("#prueba").hasClass("hiddeNavBarHidde")){ 
          $("#prueba").removeClass("hiddeNavBarHidde");
        }
        else{
          $("#prueba").addClass("hiddeNavBarHidde");
        }
        
      });

      $(document).ready(function (){
        $("#miInicio").addClass("active");
      }); 


    </script>
    
</body>

</html>