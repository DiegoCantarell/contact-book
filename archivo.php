<?php
//SE TRABAJAN COMO LIBRERIAS
//POR RENDIMIENTO ES NECESARIO QUE SOLO SE TENGA UNA INSTANCIA PARA SQL, ESTA VA A COMUNICAR A TODOS
//DEBIDO A QUE ES SECUENCIAL EL USO DE LOS ARCHIVOS ES DE ESTA MANERA
include "valida.php";
include "class/sql.php";
//CUANDO LLEGUE A ESTA PARTE, LO VA A INSTANCIAR
include "class/contacto.php";

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
                  <a class="nav-link" href="salir.php">Salir</a>
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
            <h3>Nuevo Usuario</h3>




<?php
//Condiciónes para validaciones
//Existen los archivos?, si es así guardalo, de lo contrario mandalo vacío
$nom = isset($_POST["nom"])? $_POST["nom"]: "";
$tel = isset($_POST["tel"])? $_POST["tel"]: "";
$dir = isset($_POST["dir"])? $_POST["dir"]: "";
$correo = isset($_POST["correo"])? $_POST["correo"]: "";

echo($nom)."<br>";
echo($tel)."<br>";
echo($dir)."<br>";
echo($correo)."<br>";


$dir2 = "archivo/";
//Archivo que vamos a mandar
$archivo = $dir2.basename($_FILES["foto"]["name"]);
//En name hay que sacarlo del campo temporal, debido a eso usamos tmp_name
if(move_uploaded_file($_FILES["foto"]["tmp_name"], $archivo)){ 
    //Creamos una nueva instancia de contacto
    $contacto = new contacto();
    /*La variable usuario nos permite identificar el usuario que contiene contactos
    La variable es llamada desde autenticación, iniciando la sesión, se válida
    y al poner el archivo valida.php en el presente archivo, se ejecuta el script, es lo primero que hace
    se manda el header, siempre y cuando no s eha escrito nada en la pantalla
    esto nos sirve ya que primero hace la validación y luego todo lo demás*/
    $contacto->crearContacto(null, $nom, $tel, $dir, $correo, $archivo,$usuario);
    echo "<br>".$archivo."<br>";
    echo "El archivo se cargó correctamente";
    echo "<br> <a  href=index.php><strong>Volver a inicio</strong></a>";
}
else{
    echo"Falló la carga del archivo";
}
?>


  <!--MODAL-->
  <div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalError">
        <div class="modal-dialog" role="document">
            <div class = "modal-content rounded-4 shadow">
            <div class = "modal-body p-4 text-center">
                <h5 class = "mb-0">Error</h5>
                <p class = "mb-0" id = "modalErrorText">Error de Registro</p>
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
    
    </script>

    
</body>
</html> 