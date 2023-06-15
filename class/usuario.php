<?php
class usuario{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        $this->sql=new sql();
    }

    public function validaUsuario($user,$pass){
        /*Debo definir un objeto ya que se puede regresar
        un solo valor, y este debe venir de un solo
        objeto 
        SI LOS OBJETOS SON CORRECTOS, YA NO DEBEMOS VALIDAR, YA QUE
        ASÍ COMO VAMOS VALIDANDO, LOS VAMOS A IR GENERANDO*/
        //$obj = new stdObject(); //Con StdObjecto no funcionó
        /*
        Sabemos que un método regresa una variable, solo un tipo de dato
        Aquí mandamos 4 variables, encapsuladas en un objeto, listas
        para consumirse*/
        $obj = new stdClass();


        $obj->auxPass="";
        $obj->nom="";
        $obj->auxUser="";
        $obj->roll="";
        $obj->foto="";
        $obj->usuario="";

        //La variable estado nos va a indicar si es correcto o no
        $estado="0";
        //existen multiples maneras de validar un usuario
        //una de ellas es:
        $sql1="SELECT id,usuario,nombre, pass,roll,foto FROM usuario WHERE usuario='".$user."'";
        //El result ya contiene los elementos que estoy buscando
        //Hacemos la validación del usuario
        //ojo aquí
        $this->result= $this->sql->ejecutar($sql1);
        //Forma de validación de $result
        //Nos aseguramos que tenga datos
        if($this->result->num_rows>0){
            //Nos lo va a regresar en formato de arreglo
            //Va sobre un conjunto de datos
            //Significa que es un arreglo
            /*Con row lo asignamos al entrar al while, así consecutivamente
            cada elemento
            La expresión da verdadero, cuando ya no tiene elementos
            va a dar falso*/
            while($row=$this->result->fetch_assoc()){
                /*Cuando entre tendré cargados estos elementos y por}
                consecuente va a estar validado*/
                $obj->auxPass=$row["pass"];
                $obj->auxUser=$row["usuario"];
                $obj->nom=$row["nombre"];
                $obj->roll=$row["roll"];
                $obj->foto=$row["foto"];
                $obj->usuario=$row["id"];

            }

        }
        //De esta manera valido todo y lo devuelvo, con el objeto
        //Así se pueden usar todos los componentes
        return $obj;
        /*Con el fin de aumentar la seguridad y tratar de evitar las
        inyecciones de código, se puede crear una condición para reforzar
        la validación*/
        /*
        if(($auxUser==$user) && ($auxPass==$pass)){
            $estado=1;
            echo "usuario:  ".$user."<br>";
            echo "password:  ".$pass."<br>";
        }
        //Condición no necesaria, solo para pruebas
        else{
            echo "ERROR, NO EXISTE";
        }
        */
    }
}
?>