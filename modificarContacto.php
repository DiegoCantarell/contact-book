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
        <!--El ID LO COLOCAMOS AQUÍ PARA CENTRAR LOS CAMPOS DE MODIFICAR CONTACTO USANDO AJAX-->
        <div class="row" id="contenido">
          <div class="col-sm-2"></div>
            <div class="col-sm-8"> 
              <h3>Modificar Contacto</h3>
              <!--SOBRE ESTE DIV VAMOS A SOBREESCRIBIR-->
                <div >
                  <?php  
                  //Definimos la instancia de contacto
                    $contacto = new contacto();
                    $contacto->muestraContacto($usuario);
                  
                  ?>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
      </div>
    </main>

    <!--MODAL-->
    <div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalValidar">
            <div class="modal-dialog" role="document">
                <div class = "modal-content rounded-4 shadow">
                  <div class = "modal-body p-4 text-center">
                      <h5 class = "mb-0">Validar</h5>
                      <p class = "mb-0" id = "modalValidarText">¿Esta seguro que desea hacer el cambio?</p>
                  </div>
                  <div class = "modal-footer fle-nowrap p-0">
                      <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                      onClick="ok()">
                      <strong>Ok</strong>
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
        $("#miModificarContacto").addClass("active");
      }); 

      function modificar1(id){
          //Para que el usuario no sepa que existen las clases, usaremos procesos
          //&id = SIGNIFICA QUE LLEVARA UN ID
          //&r = rand- ESTE RAND LO QUE VA A PERMITIR ES CUANDO SE LLAME A LA CACHÉ SIEMPRE SE ACTUALICE
          //ES UN PEQUEÑO DETALLE QUE TIENEN LOS MÉTODOS TIPO GET
          var url = "procesos.php?tipo=1&id="+id + "&r="+ Math.random();


          //LAS FUNCIONES AJAX NOS VAN A PERMITIR SOBREESCRIBIR
          //FUNCIÓN DE AJAX DONDE SE VAN A CORRER LOS ELEMENTOS
          //LE INDICAMOS EL PASO DE PARAMETROS QUE NOS ESTÁ PIDIENDO
          //LA VARIABLE URL ES IGUAL A URL, CUANDO ESTE EVENTO ES SATISFACTORIO OBTENDREMOS UN SUCCESS
          $.ajax({url : url, success : function(result){
            /*DE ESTA MANERA CENTRAMOS EL FORMULARIO DE MODIFICAR CONTACTO USANDO AJAX Y CONTENEDORES*/
            var aux1='<div class="col-sm-4"></div>';
            var aux2='<div class="col-sm-4"><h3>Modificar Contacto</h3>';
            var aux3='</div>';
            $("#contenido").html(aux1 + aux2 + result +aux3+  aux1);
          }});
        }

      function modificarContacto(){

        $("#modalValidar").modal("show");

      }
        //FUNCIÓN QUE TRABAJA PARA USAR EL MODAL
        function ok(){
          //SIEMPRE ES IMPORTANTE DECLARARLOS COMO VARIABLE PARA IDENTIFICARLOS EN CONTEXTO
          var id = $("#id").val();
          var nom = $("#nom").val();
          var tel = $("#tel").val();
          var dir = $("#dir").val(); 
          var correo = $("#correo").val(); 
          /*INDICO EN LA URL QUE TENGO TIPO 2
          PRIMERO PEDIMOS EL ID, LO VALIDAMOS USANDO ID
          DESPUÉS PEDIMOS EL NOMBRE, LO VALIDAMOS USANDO NOM
          TELÉFONO
          DIRECCIÓN*/
          var url = "procesos.php?tipo=2&id="+id+"&nom="+nom+"&tel="+tel+"&correo="+correo+"&dir="+dir+"&r="+ Math.random();
          //PARA VALIDAR USAMOS UNA TÉCNICA
          console.log(url); // DE ESTA MANERA ME ASEGURO QUE URL LE ESTOY MANDANDO
           // TOMO LA FUNCIÓN DEL AJAX
          $.ajax({url : url, success : function(result){ 
            $("#contenido").html(result);


            //DE ESTA MANERA MOSTRAMOS LOS RESULTADOS EN EL APARTADO DESEADO
            //CON AYUDA DE MATH RANDOM NOS ASEGURAMOS DE NO AFECTAR LA CACHÉ
            location.href = "modificarContacto.php?r="+ Math.random();
          }});


          $("#modalValidar").modal("hide");
          //alert($nom);

          
        }
    </script>
    
</body>
</html>