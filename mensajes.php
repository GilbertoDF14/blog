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
                <li class="nav-item"><a class="nav-link" href="inicio.php" >Inicio</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="mensajes.php" >Mensajes</a></li>
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
            <div class="col"><span>Tema:</span><span id="nombreTema">Programacion</span></div>
        </div>
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header colorFondo colorTexto">
                        Agregar Mensaje
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                               <div class="input-group-text">
                                Mensaje:
                               </div>
                                
                            </div>
                            <input type="text" name="mensaje" id="mensaje" 
                            class="form-control" placeholder="Escribe tu mensaje">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary colorFondo colorTexto" onclick="agregarMensaje()">
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
                            <th>Id</th>
                            <th>Tema</th>
                            <th>Mensaje</th>
                            <th>Usuario</th>
                            <th>Fecha</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody id="tablaTemas">
                        <tr>
                            <td>1</td>
                            <td>Programaci&oacute;n</td>
                            <td>Hola</td>
                            <td>user</td>
                            <td>2020-09-28</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modificaTema"><i class="material-icons align-middle">edit</i></button>
                                <button class="btn btn-danger"><i class="material-icons align-middle" data-toggle="modal" data-target="#eliminaTema">cancel</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!--Modal para editar-->
    <div class="modal fade" id="modificaTema" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Mensaje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                       <div class="input-group-text">
                        Mensaje:
                       </div>
                        
                    </div>
                    <input type="text" name="msgEditar" id="msgEditar" 
                    class="form-control" placeholder="Mensaje">
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
    <div class="modal fade" id="eliminaTema" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar mensaje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Estas seguro de eliminar el mensaje?</p>
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
    <script src="js/mensajes.js"></script>
</body>
</html>