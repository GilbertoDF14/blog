<?php
    require_once 'seguridad.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark colorFondo">
        <a class="navbar-brand" href="#">
            <i class="material-icons">comment</i>
            Blog
        </a>
        <button class="navbar-toggler"  data-toggle="collapse" data-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="inicio.html" >Inicio</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="mensajes.html" >Mensajes</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="usuarios.html" >Usuario</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html" >Salir</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col"><span>USUARIO:</span><span id="nombreUsuario">Yo (mi perfil)</span></div>
        </div>
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header colorFondo colorTexto">
                        Agregar Amigo
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                               <div class="input-group-text">
                                Usuario:
                               </div>
                                
                            </div>
                            <input type="text" name="mensaje" id="user" 
                            class="form-control" placeholder="Escribe el nombre de Usuario">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary colorFondo colorTexto" onclick="agregarAmigo()">
                            <i class="material-icons align-middle">add_circle</i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody id="tablaUs">
                        <tr>
                            <td>admin</td>
                            <td>A</td>
                            <td>Administrador</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modificaUs"><i class="material-icons align-middle">edit</i></button>
                                <button class="btn btn-danger"><i class="material-icons align-middle" data-toggle="modal" data-target="#eliminaUs">cancel</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!--Modal para editar-->
    <div class="modal fade" id="modificaUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                       <div class="input-group-text">
                        Usuario:
                       </div>
                        
                    </div>
                    <input type="text" name="usEditar" id="usEditar" 
                    class="form-control" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" onclick="guardaCambios()" data-dismiss="modal" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>

       <!--Modal para eliminar-->
    <div class="modal fade" id="eliminaUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Estas seguro de eliminar este usuario?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" onclick="confirmaEliminar()" data-dismiss="modal" class="btn btn-primary">Si</button>
            </div>
          </div>
        </div>
      </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/usuarios.js"></script>
</body>
</html>