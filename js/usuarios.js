usuarios = [{id:'1',usuario:'admin', tema:'web', fecha:'2020-09-28'}, 
            {id:'2',usuario:'pepe', tema:'mate', fecha:'2020-09-28'}];

usId = 2;
idaeliminar = 0;
idaeditar = 0;

actualizar();
console.log(mensajes);

$("#nombreUsuario").text('Rafa');

function agregarAmigo(){
    let user = $("#user").val();
    usId ++;
    nuevoUsuario = {id: usId,usuario:user, tema: 'Redes', fecha:'2020-10-10'};
    usuarios.push(nuevoUsuario);
    console.log(usuarios);
    actualizar();
}

function actualizar(){
    $("#tablaUs").html('');
    for(let i = 0 ; i < usuarios.length; i++){
        let fila = "<tr><td>" + usuarios[i].id + "</td><td>" + usuarios[i].usuario + "</td><td>" + usuarios[i].tema + "</td><td>" + usuarios[i].fecha  + "</td>";
        fila = fila + "<td><button onclick='editarUs("+ usuarios[i].id +");' class='btn btn-primary' data-toggle='modal' data-target='#modificaUs'>";
        fila += "<i class='material-icons align-middle'>edit</i></button>";
        fila += "<button onclick='eliminarUs("+ usuarios[i].id +");' class='btn btn-danger' data-toggle='modal' data-target='#eliminaUs'>";
        fila += "<i class='material-icons align-middle'>cancel</i></button></td></tr>";
        //console.log(fila);
        $("#tablaUs").append(fila);
    }
    
}

function editarUs(id){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==id){
            $("#usEditar").val(usuarios[i].usuarios);
            idaeditar = id;
            break;
        }
    }
}

function eliminarUs(id){
    idaeliminar = id;
}

function confirmaEliminar(){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==idaeliminar){
            usuarios.splice(i,1);
            break;
        }
    }
    actualizar();
}

function guardaCambios(){
    for(let i = 0 ; i < usuarios.length; i++){
        if(usuarios[i].id==idaeditar){
            usuarios[i].usuario = $("#usEditar").val();
            break;
        }
    }
    actualizar();
}