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
include "class/sql.php";
include "class/contacto.php";
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
            <div class="collapse navbar-collapse d-flex justify-content-end"><p style="font-size: 20px;"><strong>By Diego Gabriel Caballero Cantarell - 201843326</strong></p></div>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="minavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="salir.php"><strong>Salir</strong></a>
                </li>
                
            </div> 
          </div>
        </nav>     
        <div class="row" >
          <div class="col-sm-2"></div>
            <div class="col-sm-8" id="tabla"> 
              <h3>Borrar Contacto</h3>
              <!--SOBRE ESTE DIV VAMOS A SOBREESCRIBIR-->
                <div >
                  <?php  
                  //Definimos la instancia de contacto
                    $contacto = new contacto();
                    $contacto->eliminarContacto($usuario);
                  
                  ?>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
      </div>
    </main>

<!--MODAL-->
<div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalEliminar">
                    <div class="modal-dialog" role="document">
                        <div class = "modal-content rounded-4 shadow">
                          <div class = "modal-body p-4 text-center">
                              <h5 class = "mb-0">Información</h5>
                              <p class = "mb-0" id = "modalEliminarText">¿Esta seguro que desea eliminar el contacto?</p>
                          </div>
                          <div class = "modal-footer fle-nowrap p-0">
                              <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                              onClick="ok()">
                              <strong>Si</strong>
                              </button>
        
                              <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                              data-bs-dismiss = "modal">
                              <strong>Cancelar</strong>
                              </button>
        
                          </div>
        
                        </div>
                        
                    </div>
              </div>


    
    <!--Anadimos posibles elementos a colocar usando JQuery y BootStrap
    Esto por si es necesario hacer Scripts-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="sidebars.js"></script>
    <!--<script src="js/bootstrap.bundle.min.js"></script>-->
    <!--<script src="js/bootstrap.js"></script>-->


    <script>
      //Variable de apoyo para el método eliminar contacto
      var idContacto = 0;

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
        $("#miBorrarContacto").addClass("active");
      }); 

      function eliminar1(id){
        idContacto = id;
        $("#modalEliminar").modal("show");
        //alert(id);
      }
      function ok(){
        //alert(idContacto);
        var url = "procesos.php?tipo=3&id="+idContacto+"&r="+Math.random();
        console.log(url);
        $.ajax({url : url, success : function(result){ 
            $("#tabla").html(result);
            //idContacto=id;
            $("#modalEliminar").modal("hide");
            location.href = "borrarContacto.php?r="+ Math.random();
        }});
      } 

    </script>
    
</body>
</html>