<?php
//include inclusion de archivo no obligatoria
//include_once carga una vez
//require carga simpre que se ejecute
require_once 'conexion.php';
$u=$_GET['user'];
$p=$_GET['pass'];

$con= conexion();

$comando = $con->prepare("SELECT * FROM usuarios WHERE user=:u AND pass=:p");
$comando->bindvalue(':u',$u);
$comando->bindvalue(':p',$p);
$comando->execute();
$consulta=$comando->fetch(); 

if($consulta){
    echo "si";
}else{
    echo "no";
}