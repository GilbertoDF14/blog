<?php
require_once 'seguridad.php';
require_once 'conexion.php'

$op=$_GET['operacion'];


$con = conexion ();
//CRUD Create,Read,Update,Delete
switch($op){
    case "C":
        $user=$_GET['user'];
        $pass=$_GET['pass'];
        $tipo=$_GET['tipo'];
        $nombre=$_GET['nombre'];
        $cmd = $con->prepare("INSERT INTO usuarios(user,pass,tipo,nombre) VALUES(:u,:p,:t,:n)");
        $cmd->bindValue(':u',$user);
        $cmd->bindValue(':p',$pass);
        $cmd->bindValue(':t',$tipo);
        $cmd->bindValue(':n',$nombre);
        $id=$con->lastInsertId();
if($cmd->rowCount()>0){
    echo json_encode(["resp"=>"si"],"id"->$id);
}else{
    echo json_encode(["resp"=>"no"]);
}
    break;
    case "R":
        $user=$_GET['user'];
        $cmd = $con->prepare("SELECT user as Usuario, tipo as Tipo,nombre as Nombre  FROM usuarios WHERE user=:u");
        $cmd->bindValue(':u',$user);
        $cmd->setFetchMode(PDO::FETCH_ASSOC);
        $cmd->execute();
        $tabla = $cmd->fetchAll();
        echo json_encode($tabla);
    break;
    case "U":
        $id=$_REQUEST["user"];
        $nombre=$_REQUEST["nombre"];
        $cmd = $con->prepare("UPDATE usuarios SET nombre=:m WHERE user=:id");
        $cmd->bindValue(':m',$nombre);
        $cmd->bindValue(':id',$id);
        $cmd->execute();
        if($cmd->rowCount()>0){
            echo json_encode(["resp"=>"si"]);
        }else{
            echo json_encode(["resp"=>"no"]);
        }
    break;
    case "D":
        $user=$_REQUEST["user"];
        $cmd = $con->prepare("DELETE FROM usuarios WHERE user=:id");
        $cmd->bindValue(':id',$user);
        $cmd->execute();
        if($cmd->rowCount()>0){
            echo json_encode(["resp"=>"si"]);
        }else{
            echo json_encode(["resp"=>"no"]);
        }
    break;
    default:
}