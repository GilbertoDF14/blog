$("#msgLogin").hide();
function login(){
    u=document.getElementById("user").value;
    //u=$("#user").val();
    p=document.getElementById("pass").value;

    $.get("login.php",{user:u,pass:p}).done(function(respuesta){
        if(respuesta=="si"){
            location.href="inicio.html";
        }else{
            $("#msgLogin").fadeIn(1000);
            $("#msgLogin").html("Error de usuario/contraseña")
        }
    });
    
}