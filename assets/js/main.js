//submit es para cuando se presione el boton submit
//#fr es el id del form
jQuery(document).on('submit', '#fr', function (event) {    
event.preventDefault();
      var usuario = $('#user').val();
      var pas = $('#pass').val(); 
      alert(usuario);  
jQuery.ajax({
    type:'POST',
    url:'login.php',
    dataType:'json',
    data:{user:usuario, pass:pas},
    beforeSend:function(){
       $('#login').val('Ingresando..'); 
},
})
.done(function(respuesta) { 
    console.log("correcto");   
    console.log(respuesta);
    //alert("usuario: "+user+"pass "+pass);
    if(!respuesta.error){
        if (respuesta.tipo=="admin") {
          location.href="principal.php"
        }
        else
        if (respuesta.tipo=="Grupo") {
          location.href="vistaAlumnos.php";
        }
        else
        if (respuesta.tipo=="Profesor") {
          location.href="vistaprofesores.php"
        }
        else
        if (respuesta.tipo=="tutor") {
          
        }             
            
    }else{            
        $('.error').slideDown('slow'); 
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        $('#login').val('Iniciar sesion');
        $('.olvidar').fadeIn(500);
      setTimeout( "$('.olvidar').fadeOut(1500);",3000 );
    }
})
.fail(function(resp){
  console.log("incorrecto");
   //alert("usuario: "+user+"pass "+pass); 
    alert(resp);
 console.log(resp.responseText);   
})
.always(function(){
    console.log("complte");
});
});
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });