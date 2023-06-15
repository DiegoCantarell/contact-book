<?php
include "valida.php";
include "class/sql.php";
include "class/contacto.php";

$tipo = isset($_GET['tipo'])?$_GET['tipo']:"";
//lA DEJAMOS AFUERA PARA NO TENER QUE ESTAN INSTANCIANDO MULTIPLES VECES 
$contacto = new contacto();

if($tipo == 1){
    $id = isset($_GET['id'])?$_GET['id']:"";
    
    $contacto->modificar($id);
}
//DEFINIMOS BANDERA
else if ($tipo ==2){
    $id = isset($_GET['id'])?$_GET['id']:"";
    $tel = isset($_GET['tel'])?$_GET['tel']:"";
    $nom = isset($_GET['nom'])?$_GET['nom']:"";
    $dir = isset($_GET['dir'])?$_GET['dir']:"";
    $correo = isset($_GET['correo'])?$_GET['correo']:"";


    $contacto->modificarContacto($id, $nom, $tel, $dir, $correo);

}
else if ($tipo ==3){
    $id = isset($_GET['id'])?$_GET['id']:"";
    $contacto->eliminarContactoItem($id,$usuario);

}
else if ($tipo ==4){
    $buscar = isset($_GET['buscar'])?$_GET['buscar']:"";
    $contacto->buscarContacto($usuario, $buscar);

    

}

?>