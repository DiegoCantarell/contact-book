<?php
//Abrimos la sesión
session_start();

$nom=$_SESSION["nom"];
$foto=$_SESSION["foto"];
$usuario=$_SESSION["usuario"];

// Checamos si en la sesión existe un objeto
//lamado misession
if(isset($_SESSION["misession"])){
    /*Mi sesión es validada con el 
    usuario root?*/
    //En proyecto agenda, requerimos que sea dif a null
    if(($_SESSION["misession"] != "")){
        //
    }
    else{
        /*Si el usuario no corresponde no tiene
        acceso a esta parte*/
        header("Location: login.php");
    }
}

else {
    /*Si la sesión no existe, no se puede
    avanzar */
    header("Location: login.php");
}

?>