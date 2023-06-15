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
                </li>
                
            </div> 
          </div>
        </nav>     
        <div class="row">
          <!--DIVIDIMOS EN 4 LAS COLUMNAS, PARA CENTRAR
          BUSCANDO ABARCAR 12, 4*3 = 12-->
          <div class="col-sm-4">   
          </div>
          <div class="col-sm-4">  
            <h3>Nuevo Contacto</h3>
            <!--El formulario lo mandaré a un archivo llamado archivo.php
                Esto cuando haga el method
                En el method se va a definir por que tipo de dato se va a mandar
                Como se va a mandar el archivo debe ir con un POST un GET no lo va a soportar 
                Esto debido a que crece mucho
                Usando enctype, se definen los parametros
                El id lo mandaré por el formulario-->
            <form id="nuevoUsuarioForm" action="archivo.php" method="POST" enctype="multipart/form-data">
              <!--DIV PARA CONTENER LOS ELEMENTOS QUE VOY A AGREGAR
              lE DOY UNA CLASE, Y EN ESA CLASE LE DARÉ LOS PARAMETROS
              ESTO PARA TENER MÁS CONTROL DE LO QUE EL USUARIO ESTÁ VISUALIZANDO
              mb-3 = SIMILAR AL ESPACIO QUE VA A TENER
              mt-3DEFINIENDO EL ESPACIO SOBRE EL FORMULARIO-->
                <div class="mb-3 mt-3">
                  <label for="nom">Nombre:</label>
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Ingresa el nombre del nuevo contacto">
                </div>
                <div class="mb-3 mt-3">
                  <label for="tel">Teléfono:</label>
                  <input type="number" class="form-control" id="tel" name="tel"   placeholder="Ingresa el teléfono del nuevo contacto">
                </div>
                <div class="mb-3 mt-3">
                  <label for="dir">Dirección:</label>
                  <input type="text" class="form-control" id="dir" name="dir" placeholder="Ingresa la dirección del nuevo contacto">
                </div>
                <div class="mb-3 mt-3">
                  <label for="correo">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa el correo del nuevo contacto">
                </div>
                <div class="mb-3 mt-3">
                  <label for="foto">Foto:</label>
                  <input type="file" accept="image/png, image/jpg" class="form-control" id="foto" name="foto" placeholder="Ingresa la foto del nuevo contacto">
                </div>
                <div class="mb-3 mt-3">
                  <button type="button" class=" form-control btn btn-primary" id="aceptar">Crear</button>
                </div>
            </form>
          </div>
          <div class="col-sm-4">   
          </div>
        </div>
      </div>
    </main>

  <!--MODAL-->
  <div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalError">
        <div class="modal-dialog" role="document">
            <div class = "modal-content rounded-4 shadow">
            <div class = "modal-body p-4 text-center">
                <h5 class = "mb-0">Error</h5>
                <p class = "mb-0" id = "modalErrorText">Error</p>
            </div>
            <div class = "modal-footer fle-nowrap p-0">
                <button type = "button" class = "btn btn-lg btn-link fs-6 text-decoration--none col-6 m-0 rounded-0 border-right"
                data-bs-dismiss = "modal">
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
        $("#miNuevoContacto").addClass("active");
      }); 
      $("#aceptar").click(function (){

        var nom = $("#nom").val();
        var tel = $("#tel").val();
        var dir = $("#dir").val();
        var correo = $("#correo").val();
        var foto = $("#foto").val();

        //Variable para contener todos los errores
        var error = "";

        if(nom==""){
          error = "Falta el nombre <br>";
        }
        if(tel==""){
          error += "Falta el teléfono <br>";
        }
        if(dir==""){
          error += "Falta la dirección <br>";
        }
        if(correo==""){
          error += "Falta el correo <br>";
        }
        if(foto==""){
          error += "Falta la foto <br>";
        }

        if(error == ""){
            $("#nuevoUsuarioForm").submit();
        }
        else{
          //Se manda como html por los saltos de linea
          $("#modalErrorText").html(error);
          $("#modalError").modal("show");

        }

      });
    </script>
    <!--
      FORMA DE MANDAR LOS PARAMETROS
      AGREGAMOS EL ELEMENTO A UN FORM, ES LO IDEAL
      ESTO DEBIDO A QUE SI TE EQUIVOCAS LO PUEDES LANZAR
      EMPEZAREMOS A LANZAR EL FORMULARIO CUANDO SE TENGA TODA LA INFO
  -->
    
</body>
</html>