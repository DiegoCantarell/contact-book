<!--
ARCHIVO INDEX GENERAL
USAMOS 
usuario = root
PASSWORD = toor
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/modals.css">
  </head>
  <body>
    

    <!--Ejempplos contenedores-->
    <!--Este primer contenedor, nos va a centrar el texto en la pantalla-->
    <!-- 
    <div class="container">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
        assumenda iusto! Dignissimos, ex odio aliquam voluptas harum sed,
        officia minima fugit adipisci, illo eaque. Ipsa optio facilis magnam
        tempore pariatur. Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Quod dolorum blanditiis numquam tempore hic id culpa quaerat,
        dignissimos obcaecati, atque ut. Illum cumque dolor voluptatibus iste
        quas numquam eos porro?
      </p>
    </div>
    -->

    <!--El segundo contenedor, nos va a ocupar desde el inicio
      del borde de nuestra pantalla, as'i distribuye el texto-->
    <!-- 
    <div class="container-fluid">
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ad
        ipsum eum sit quo! Unde eveniet dolorem id magni rem! Distinctio ipsa
        totam eaque amet voluptates, soluta corrupti ipsum suscipit. Lorem ipsum
        dolor sit amet consectetur adipisicing elit. Quod dolorum blanditiis
        numquam tempore hic id culpa quaerat, dignissimos obcaecati, atque ut.
        Illum cumque dolor voluptatibus iste quas numquam eos porro?
      </p>
    </div>
    -->
    <!-- Creo columnas, cada una se va estructurando una desp'es de otra
esto es debido a que es como si fueran de tipo out-->

    <!--Ahora le dire:
Cuando tengas un tamao, quiero que seas de 12
Tambi'en le puedo decir, que cuando vaya a otra resoluci'on, que vaya
a la mitad, esto para que haga 2 columnas

cuando usamos col-lg es para crear otra forma de columnas, en este caso
3x4 = 12

De esta forma al mover la dimensi'on de la pantalla, podemos ir viendo como 
se va a comportar, adaptandose de acuerdo a el tamano en pantalla disponible

Esa es la clave de esta parte, de dependiendo de como se va estructurando, se 
va volviendo responsivo-->

    <div class="container">
      <!--PARTE PARA CREAR TABLAS RESPONSIVAS
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">1</div>
        <div class="col-sm-12 col-md-6 col-lg-3">2</div>
        <div class="col-sm-12 col-md-6 col-lg-3">3</div>
        <div class="col-sm-12 col-md-6 col-lg-3">4</div>
      </div>
      -->
      <!--
      <div class="table-responsive">
        <table class="table table-danger table-hover table-striped">
        -->
      <!--
            Esta es una tabla sencilla, el navegador no sabe que es una tabla
        Esto es debido a que no tiene ning'un estilo asociado
      -->

      <!-- Para los titulos usamos th-->
      <!-- Para los titulos contenidos de las tablas
        usamos td-->

      <!--
      <tr>
            
            <th>Id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>usuario</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Juan</td>
            <td>P'erez</td>
            <td>juan@gmail.com</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Juan</td>
            <td>P'erez</td>
            <td>juan@gmail.com</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Juan</td>
            <td>P'erez</td>
            <td>juan@gmail.com</td>
          </tr>
        </table>
      </div>
    -->
      <!--55-->
      <div class="row">
        <div class="col-12 col-sm-3 col-lg-4"></div>
        <div class="col-12 col-sm-6 col-lg-4">
        <h1>Contact Book</h1>
        <h2>Login</h2>
          <!--Nombre que se le da al formulario para alcanzarlo-->
          <form action="autenticar.php" id = "formulario" method = "post" >
            <div class="form-group">
              <!--
                palceholder es para que adentro nos ponga un comentario
                Como costumbre, se nos recomienda anadir 2 etiquetas
                una de ellas es el id, que se usa con jquery para identificar el id
              y name, que nos va a permitir darle un nombre-->

              <!--onfocus="miOnFocus()"-->

              
              <label for="usuario">Usuario</label
              ><input
                type="text"
                class="form-control"
                placeholder="Usuario"
                id="usuario"
                name="usuario"
                

                
                

              />
            </div>

            <div class="form-group">
              <!--
                palceholder es para que adentro nos ponga un comentario
                Como costumbre, se nos recomienda anadir 2 etiquetas
                una de ellas es el id, que se usa con jquery para identificar el id
              y name, que nos va a permitir darle un nombre-->
              <label for="password">Password</label
              ><input
                type="password"
                class="form-control"
                placeholder="Password"
                id="password"
                name="password"
              />
            </div>

            <div class="form-group form-check">
              <label for="from-check-label">
                <input type="checkbox" class="from-check-input" />Recordar
              </label>
            </div>
            <div class="form">
              <!--<button type="submit" class="btn btn-primary form-control">Enviar-->
                <button type="button" class="btn btn-primary form-control" id="btn1" name="btn1" onclick="clickbtn1()">Enviar</button>
                
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

<!--
  *****AQUÍ EMPIEZA LA TAREA 8, ES LO QUE SE AGREGA A LA TAREA 7****
 bg-secundary = para decirle que es grande y de tipo secundary
 py-5 = es como el parrafo que tiene
 tabindex = dependiendo de esto, es donde se va a posicionar en el tamaño

 id = modalChoise, esto es para elegir el que esta seleccionado
 El el div interno voy a emepzar a crear documentos
-->
<div class="modal modal-alert bg-secundary py-5" tabindex="-1" role="dialog" id="modalChoise">
  <div class="modal-dialog" role="document">
    <div class = "modal-content rounded-4 shadow">
      <div class = "modal-body p-4 text-center">
        <h5 class = "mb-0">Error</h5>
        <p class = "mb-0" id = "modalChoiseText">Error de autenticación</p>
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>


    <script>
      /*
      $(document).ready(function(){
        $("#btn1").click(function(){
alert("Mensaje generado por JQuery");
        });
      });

      */
    function clickbtn1(){
      //Forma de validar
      //Es lo que tiene el elemento del user
      //. val es lo que nos regresa del usuario y lo almacenamos
      
      var user = $("#usuario").val();
      var pass = $("#password").val();
      var error ="";
      if(user ==""){
        error = "Falta el usuario<br>"
      }
      if(pass == ""){
        error += "Falta el password";
      }

      if(error == ""){
        //alert("Ok");
        $("#formulario").submit();
      }
      else{
        $("#modalChoiseText").html(error);
        $("#modalChoise").modal("show");

      }
      //alert("Mensaje generado por JavaScript");
    }

    function miOnFocus(){
      alert("Alerta generada por onFocus");
    }

    function miKeyUp(){
      alert("Alerta generada por keyUp");
    }

    </script>
  </body>
</html>
